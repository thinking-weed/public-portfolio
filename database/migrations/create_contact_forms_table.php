<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('contact_forms', function (Blueprint $table) {
            $table->id()->comment('ID');
            $table->string('VisitorName',60)->comment('お名前、御法人名');
            $table->string('VisitorEmail',256)->charset('utf8')->comment('メールアドレス');
            /*unique()はカラムに重複した値を入れないようにするオプション*/
            $table->text('QuestionOrOpinion')->comment('ご質問・ご意見等');
            $table->string('research_password')->default(null)->nullable()->comment('再検索用パスワード');
            $table->rememberToken(100)->nullable()->comment('保持トークン');
            $table->boolean('delete_flag')->default(0)->comment('0なら表示、1なら論理削除'); // カスタムの削除フラグ、論理削除で利用
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->nullable()->comment('更新日時');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_forms');
    }
};
