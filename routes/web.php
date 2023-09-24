<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\BiographyController;
use App\Http\Controllers\WorksLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\ContactForm;
use App\Models\User;
use App\Models\WorksLink;
use App\Http\Controllers\GithubUrlOnController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorMessageController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\SearchController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
Route::post('/post/recipe_stock',[PostController::class,'store'])->name('post.stock');
Httpメソッドのget、postはphpのformタグに書くactionのget、postと同じ
getはただデータを送信先に「表示」する送信、
postはデータをサーバー（？）に「保存」もする送信
なお、セッションにはHttp以外にも、FTPやSSHなどいろいろ種類がある。

Route::get('/post/post_recipe',[PostController::class,'PostRecipe'])->name('post.recipe');
]を閉じる位置に気をつける。メソッドを含めるようにする

この場合、URLに「/post/post_recipe」とリクエストがあった場合、PostControllerのPostRecipeメソッドを返すという意味。
後ろのnameはresources/views/内で参照するときの呼び名
*/

Route::get('/',[HomeController::class,'showHome'])->name('home.view');

Route::get('/contact',[ContactController::class,'show'])->name('contact.view');

Route::get('/github_contact',[GithubUrlOnController::class,'showGithubURL'])->name('github_contact.view');

Route::get('/was_works',[WorksLinkController::class,'showWasWorks'])->name('WasWorks.view');

//AdministratorOnlyの画面表示
Route::get('/administrator',[AdministratorController::class,'show'])->name('administrator.view');

//Githubを使っていない、もしくはContactFormにポストした人の意見等の一覧表示
Route::get('/NonGithubUsers/Index',[AdministratorController::class,'NonGithubUsersIndex'])->name('administrator.nongithub_users_indexview');

//Githubを使ったことがある可能性の高い、もしくはGithubContactFormにポストした人の意見等の一覧表示
Route::get('/GithubUsers/Index',[AdministratorController::class,'GithubUsersIndex'])->name('administrator.github_users_indexview');

//Githubを使っていない人、もしくはContactFormの意見等のポスト
Route::post('/contact/form/post',[ContactController::class,'storeContactForm'])->name('ContactForm.store');

//Githubを使ったことがある可能性の高い人、もしくはGithubContactFormの意見等のポスト
Route::post('/github_contact/form/post',[GithubUrlOnController::class,'storeGithubContactForm'])->name('GithubContactForm.store');

//Githubを使っていない、もしくはContactFormにポストした人の意見等の編集画面の表示
Route::get('/Non_Github_users/posts/editorview/{post}', [ContactController::class, 'editorview'])->name('non_github_users_posts.editor.view');

//Githubを使ったことがある可能性の高い人、もしくはGithubContactFormにポストした人の意見等の編集画面の表示
Route::get('/Github_users/posts/editorview/{post}', [GithubUrlOnController::class, 'editorview'])->name('github_users_posts.editor.view');

//Githubを使っていない、もしくはContactFormにポストした人の意見等の削除
Route::delete('/Non_Github_users/posts/destroy/{id}', [App\Http\Controllers\ContactController::class, 'postdestroy'])->name('non_github_user_post.destroy');

//Githubを使ったことがある可能性の高い人、もしくはGithubContactFormにポストした人の意見の削除
Route::delete('/github_user_posts/destroy/{id}', [App\Http\Controllers\GithubUrlOnController::class, 'postdestroy'])->name('github_user_post.destroy');

//Githubを使っていない、もしくはContactFormにポストした人の意見等を編集（コメントなどを付与）
Route::patch('/Non_Github_users/posts/update/{post}', [ContactController::class, 'update'])->name('non_github_users_posts.info.update');
//patchじゃなくてもputでもいいが、そのときはformの@method('patch')を@method('put')に統一

//Githubを使ったことがある可能性の高い人、もしくはGithubContactFormにポストした人の意見等を編集（コメントなどを付与）
Route::patch('/Github_users/posts/update/{post}', [GithubUrlOnController::class, 'update'])->name('github_users_posts.info.update');
//patchじゃなくてもputでもいいが、そのときはformの@method('patch')を@method('put')に統一


//エラー画面を表示
Route::get('/error/message',[ErrorMessageController::class,'render'])->name('custom_errors_message');

Route::get('/main/members', function () {
    return view('main.members');
})->middleware(['auth', 'verified'])->name('main.members');
/*ダッシュボードはログインする前のホーム画面のようなもの（ログイン状態は保持される）*/

require __DIR__.'/auth.php';

Route::get('/main/dashboard', function () {
    return view('main.dashboard');
})->middleware(['auth', 'verified'])->name('main.dashboard');

//ログインしてデータベースに名前がある人に許される設定
Route::middleware('auth')->group(function () {
    Route::get('/biography', [BiographyController::class, 'edit'])->name('biography.edit');
    Route::patch('/biography', [BiographyController::class, 'update'])->name('biography.update');
    Route::delete('/biography', [BiographyController::class, 'destroy'])->name('biography.destroy');
});


// ----------------------------------------------------------------------------------------------------

//一般会員（会員登録をした（＝データベースにユーザーデータが登録されている）人）
// Route::group(['middleware' => ['auth', 'can:user-higher']], function () {
    //ここにルート記述

// });

//管理者以上
// Route::group(['middleware' => ['auth', 'can:admin-higher']], function() {
    //ここにルートを記述

// });
// この管理者以上は、ProvidersのAuthServiceProvider.phpに書かれた条件式に従う

// roleのカラムの値をもとに管理者以上と一般ユーザーを振り分けられるようにする。
