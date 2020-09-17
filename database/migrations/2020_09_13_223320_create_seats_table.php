<?php

use Illuminate\Database\Migrations\Migration;
use App\Database\Blueprint;
use App\Facades\Schema;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('id');                       // 座席ID
            $table->unsignedInteger('section_id');          // 所属する区画ID
            $table->string('position_x')->nullable();       // 座席X座標
            $table->string('position_y')->nullable();       // 座席Y座標
            $table->unsignedInteger('user_id')->nullable(); // 着席しているユーザーID
            $table->string('status')->nullable();           // 座席状態
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seats');
    }
}
