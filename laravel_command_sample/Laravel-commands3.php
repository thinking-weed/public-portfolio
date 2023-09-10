<?php
/**
 * シーダーの手順
 *
 * １、～テーブルにデータを追加するためのシーダーファイルを作る
 * php artisan make:seeder シーダー名 <--例えば、postsテーブルにPostモデルが紐付いている場合、PostSeederとする
 *
 * ２，データベースに作成されるseedersフォルダの中のseederファイル内のrunメソッド内に次みたいなかんじで
 * 　　入れたい文字列を入れる
 *
    public function run(): void
    {
        \App\Models\Category::create([//入れたいテーブルに紐付いたModelのuse宣言+createメソッド（レコード作成）
            'type' => '1',　　　
            'category_name' => 'テストカテゴリー'
        ]);//おそらくidを除いたnullableでないカラム名に入れたいレコード例を入れる。
        あと、timestamps(created_atとupdated_atの該当テーブルのカラムにないと、なんかエラーになる)
    }
 *
 * ３.　php artisan db:seed --class=～Seeder（<--１のところでつけたシーダー名）をひたすら繰り返すか
 *  Factoryを作る
 *
 * なんかいろいろエラーが起こったら、リレーションを確認する
 * 一旦テーブルをデータベースからクエリで全部削除して、migrationファイルのデータ型とか確認・修正して
 *php artisan migrate:refreshをしてテーブルを作り直すとなんか上手くいくっぽい
 *なお、他のテーブルのレコードの値をcompactとかで渡して、アロー演算子でカラム名指定したときにデータ型が食い違うと
 *エラーになる
 * --------------------------------------------------------------------------------------
 *
 *
 * ----------------------------------------------------------------------------------------------
 *

 * ----------------------------------------------------------------------------
 *
 *
 *
 * ---------------------------------------------------------------------------
 *
 *
 * -----------------------------------------------------------------------------
 *
 *            'type' => fake(),
            'category_name' => fake() ->realText(10)
 * **/

?>
