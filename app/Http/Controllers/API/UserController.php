<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Events\SeatEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Carbon;

class UserController extends Controller
{
    // デフォルトアイコン名
    const DEFAULT_ICON_FILENAME = 'default.jpg';


    /** @var User */
    protected $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->middleware(function ($request, $next) {
            $this->auth_user = Auth::user();
            $this->set_online();
            return $next($request);
        });

        $this->user = $user;
    }


    /**
     * オンライン状態の更新
     *
     * @return \Illuminate\Http\Response
     */
    public function set_online()
    {
        if (empty($this->auth_user)) {
            return response(null);
        }

        // 10分で期限切れ
        $expires_at = Carbon::now()->addMinutes(10);
        Cache::put('user-is-online-' . $this->auth_user->id, true, $expires_at);

        return response(null);
    }

    /**
     * ログインユーザーの取得
     *
     * @return \Illuminate\Http\Response
     */
    public function auth()
    {
        if (empty($this->auth_user)) {
            return response(null);
        }

        return response()->json($this->auth_user->load('seat'));
    }

    /**
     * ユーザーの取得
     *
     * @param   String  $user_param ユーザーIDまたはユーザー名
     * @return  \App\Models\User    ユーザーデータ
     */
    public function get_user(String $user_param)
    {
        if (preg_match('/^[0-9]+$/', $user_param)) {
            $user = $this->user->where('id', $user_param)->first();
        } else {
            $user = $this->user->where('username', $user_param)->first();
        }

        return $user;
    }

    /**
     * ユーザーデータの表示
     *
     * @param  String $user_param ユーザーIDまたはユーザー名
     * @return \Illuminate\Http\Response
     */
    public function show(String $user_param)
    {
        return response()->json($this->get_user($user_param));
    }

    /**
     * ユーザーデータの更新
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = $request->all();

        // SNSデータの型変換
        if (!empty($data['sns'])) {
            $data['sns'] = json_decode($data['sns']);
        }

        // アイコンの保存
        if (!empty($request->file('icon'))) {
            // 削除処理
            if ($this->auth_user->icon != self::DEFAULT_ICON_FILENAME) {
                // 初期アイコン以外の場合には登録中のアイコンを削除
                Storage::delete(config('consts.storage.icon') . $this->auth_user->icon);
            }

            // 保存処理
            $filename = $request->file('icon')->hashName();
            $request->file('icon')->storeAs(config('consts.storage.icon'), $filename);

            $data['icon'] = $filename;
        }

        $result = $this->auth_user->fill($data)->save();

        if (empty($result)) {
            return response(null, config('consts.status.INTERNAL_SERVER_ERROR'));
        }

        // 取り組み中のタスクが更新された場合は通知
        if (array_key_exists('in_progress', $data)) {
            broadcast(new SeatEvent($this->auth_user->seat->section->room));
        }
        return response(null);
    }
}
