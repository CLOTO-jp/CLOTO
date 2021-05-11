<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Karte;
use App\Notifications\KarteCommentPosted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /** @var Comment */
    protected $comment;
    /** @var Karte */
    protected $karte;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Comment $comment, Karte $karte)
    {
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });

        $this->comment = $comment;
        $this->karte = $karte;
    }


    /**
     * コメントの作成
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_id'] = $this->user->id;

        // コメントはカルテか投稿のどちらかにのみ紐づく
        if (!empty($data['karte_id']) && !empty($data['post_id'])) {
            return response()->json(['message' => 'コメントの投稿に失敗しました。'], config('consts.status.INTERNAL_SERVER_ERROR'));
        }

        // 通知の発行
        if (!empty($data['karte_id'])) {
            $karte = $this->karte->find($data['karte_id']);
            // 自分のカルテへのコメントでは通知を発行しない
            if ($karte->user->id != $this->user->id) {
                $karte->user->notify(new KarteCommentPosted($karte));
            }
        }

        $result = $this->comment->create($data);

        if (empty($result)) {
            return response()->json(['message' => 'コメントの投稿に失敗しました。'], config('consts.status.INTERNAL_SERVER_ERROR'));
        }

        return response()->json();
    }

    /**
     * コメントの削除
     *
     * @param  \App\Models\Comment  $comment  削除するコメント
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $result = $comment->delete();

        if (empty($result)) {
            return response()->json(['message' => 'コメントの削除に失敗しました。'], config('consts.status.INTERNAL_SERVER_ERROR'));
        }

        return response()->json(['message' => 'コメントが削除されました。']);
    }
}
