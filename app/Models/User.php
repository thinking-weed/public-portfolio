<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\ContactForm;
use App\Models\GithubContactForm;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

//Postモデル（クラス)から見て、Userモデルは多対1という関係
//public function posts(){//ここの関数名は複数形にしておく
//    return $this->hasMany(Post::class);
//}ここの$thisはおそらくUserモデルを表す
//public function sekitamaposts(){//ここの関数名は複数形にしておく
//    return $this->hasMany(SekitamaPost::class);
//}ここの$thisはおそらくUserモデルを表す
//データベースのPostテーブルに反映するのに、user_idで紐付ける（laravel-command.php参照）
//php artisan make:migration add_column_user_id_to_posts_table --table=posts
//--table=～テーブル名でカラムを追加するテーブルを指定
//上のコマンドの場合、add_column_user_id_to_posts_tableという名のpostsと紐付けるテーブル作成のためのマイグレーションファイルをmigrationsに追加

    public function contactforms(){
        return $this->hasMany(ContactForm::class);
    }
    public function githubcontactforms(){
        return $this->hasMany(GithubContactForm::class);
    }
}

