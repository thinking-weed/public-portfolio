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
        \App\Models\ContactForm::create([
            'VisitorName' => '東西新聞社',
            'VisitorEmail' => 'east_west_paper@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '弊社社員が食べ歩いた料理を掲載していくようなHP、ブログを作成して欲しい',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);


        \App\Models\ContactForm::create([
            'VisitorName' => 'JIN',
            'VisitorEmail' => 'jin-sineknfni3fipmsnduhe@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => 'ある少年・少女を追跡・監視するシステムを作って欲しい。',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => 'アクション商事',
            'VisitorEmail' => 'action_shouji@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '弊社のある社員の家族（特に息子）の寄行を確認できるシステムを作ってほしい',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => 'アナハイムエレクトロニクス',
            'VisitorEmail' => 'gundam@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '弊社が誇るロボットの生産台数管理システムを作って欲しい',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => '丑嶋',
            'VisitorEmail' => 'ushijima-financing@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '私が経営している金融会社の融資先の顧客情報を管理するシステムを作って欲しい',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => '寿司「崋山」',
            'VisitorEmail' => 'sushi-kazan@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '弊社で取り扱う魚の受注管理システムを構築していただきたい',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => '吾妻圭右',
            'VisitorEmail' => 'kisoba-automatic-beshyarigurashi@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => 'お笑いのネタを考えてくれるChatGPTのようなものをくれ',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => 'アーニャ・フォージャー',
            'VisitorEmail' => 'peanuts-Anya@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => 'セカイヲヘイワニシタイ',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => 'Lloyd Forger',
            'VisitorEmail' => 'operation-owl@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => "I would like a system that allows me to explore the Desmond family's movements.",//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => 'Yol Forger',
            'VisitorEmail' => 'yol-forger@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => 'Ich möchte wissen, wie ich meinen Mann dazu bringe, mich zu lieben.',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);

        \App\Models\ContactForm::create([
            'VisitorName' => '殺連',
            'VisitorEmail' => 'Japan-Hitman-League@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '弊社が抱えている社員の生存確認をリアルタイムで管理できるシステムがほしい',//一定の物を入れたい場合は右の値を指定された物に直して
            
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);



        // \App\Models\ContactForm::factory(4)->create();
        //上のもともとのrunメソッドの中身部分をコメントアウトして無効にしてもよい。
    }//factory（）の引数は作成するダミーデータの数
    //php artisan db:seedでダミーデータ作成
}
