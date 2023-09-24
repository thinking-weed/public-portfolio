<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GithubContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\GithubContactForm::create([
            'VisitorName' => '海山商事',
            'VisitorEmail' => 'umiyama@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
            'QuestionOrOpinion' => '弊社社員が業務中に「え～」と発言する回数をカウントするシステムを作って欲しい',//一定の物を入れたい場合は右の値を指定された物に直して
            'delete_flag' => '0',
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ]);
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
            \App\Models\GithubContactForm::create([
                'VisitorName' => '帝国重工',
                'VisitorEmail' => 'teikoku-heavy-industries@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => '半沢直樹の無茶ぶりを止めるシステムを作ってほしい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => 'トキワ自動車',
                'VisitorEmail' => 'tokiwa-auto_car@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => '自動車の生産台数管理システムを作ってほしい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => 'カザマ商事',
                'VisitorEmail' => 'kazama-commercial@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => '大泉　洋の無茶ぶりをなんとかするシステムを作ってほしい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => '帝国航空',
                'VisitorEmail' => 'imperial-aviation@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => 'ロケットのエンジンの冷却装置の試験走行に関わるシステムを作ってほしい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => 'NERV',
                'VisitorEmail' => 'nerv_secret-agency@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => '国防に関わるロボットの生産台数管理システムを作ってほしい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => '東京エスペリオン',
                'VisitorEmail' => 'tokyo-esperion@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => '私たちエスペリオンが抱えるユースを含むサッカー選手の体調管理に役立つようなシステムを構築して欲しい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => 'Monsters.Inc',
                'VisitorEmail' => 'we_are_monsters@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => "We would like you to create a system to manage the number of doors produced to break into children's rooms.",//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);

            \App\Models\GithubContactForm::create([
                'VisitorName' => '道明寺グループ本社総務部',
                'VisitorEmail' => 'doumyouji-group@gmail.com',//一定の物を入れたい場合は右の値を指定された物に直して
                'QuestionOrOpinion' => '弊社社長の動向を監視するシステムを社長にばれないように作って欲しい',//一定の物を入れたい場合は右の値を指定された物に直して

                'delete_flag' => '0',
                'created_at' => now(),
                'updated_at' => now(),//現在の時刻を入れるメソッド
            ]);



    }
}
