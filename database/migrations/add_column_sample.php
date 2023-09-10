<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**


    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            追加するカラムを入れていく
            $table->foreignId('user_id')->after('id');
            usersテーブルのidでpostsを識別できるようにpostsテーブルに紐付けたidのカラムを作る
            afterメソッドはimageカラムの次にカラムを挿入するように指定するメソッド
        });
    }

        public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            //dropColumnは引数のカラムを消すメソッド
            $table->dropColumn('user_id');
        });
    }*/
};
