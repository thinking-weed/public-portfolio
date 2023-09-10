<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**\App\Models\ContactForm::create([
            'VisitorName' => '〇×株式会社',
            'VisitorEmail' => 'marubatsu@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => 'テスト',//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);
        **/

        \App\Models\ContactForm::factory(4)->create();
        //上のもともとのrunメソッドの中身部分をコメントアウトして無効にしてもよい。
    }//factory（）の引数は作成するダミーデータの数
    //php artisan db:seedでダミーデータ作成
}
