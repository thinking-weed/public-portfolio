<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Factories\faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactForm>
 */
class ContactFormFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [//一番左はカラム名
            'VisitorName' => \App\Models\User::factory(),
            //post作成時に新しいuserを作成して、user_idには、そのuserのidを入れる
            'VisitorEmail' => fake()->email(50),
            //VisitorEmailカラムに50文字以内のemail型のダミーデータをつくる。
            'QuestionOrOpinion' => fake()->text(300),//一定の物を入れたい場合は右の値を指定された物に直して
            'created_at' => now(),
            'updated_at' => now(),//現在の時刻を入れるメソッド
        ];
    }
}
