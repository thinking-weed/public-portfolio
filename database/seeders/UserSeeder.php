<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => '管理者1',
            'email' => 'admin01@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator1'), // パスワードをハッシュ化する関数
            'role' =>'1',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\User::create([
            'name' => '管理者予備',
            'email' => 'admin01yobi@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('administrator1yobi'), // パスワードをハッシュ化する関数
            'role' =>'2',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);

        \App\Models\User::create([
            'name' => '転職の魔王様',
            'email' => 'shepherd_carrier02@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('hitsujitani'), // パスワードをハッシュ化する関数
            'role' =>'0',
            'created_at' => now(),//php artisan db:seed --class=CategorySeeder（<--今回のseeder名）をひたすら繰り返す
            'updated_at' => now(),//現在の時刻を入れるメソッド
            //なお、対応するmigrationファイルにtimestamps()のカラムがないとエラーになる
            //idのカラムは要らない
        ]);
    }
}
