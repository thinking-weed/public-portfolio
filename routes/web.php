<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\biographyController;
use App\Http\Controllers\WorksLinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Models\ContactForm;
use App\Models\User;
use App\Models\WorksLink;
use App\Http\Controllers\GithubUrlOnController;

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

Route::get('/administrator/Opinion/Index',[AdministratorController::class,'OpinionIndex'])->name('administrator.opinion_indexview');

Route::get('/administrator/Opinion/CheckedIndex',[AdministratorController::class,'OpinionCheckedIndex'])->name('administrator.opinion_checked_indexview');

Route::get('/administrator',[AdministratorController::class,'show'])->name('administrator.view');

Route::post('/contact/form/post',[ContactController::class,'storeContactForm'])->name('ContactForm.store');

Route::post('/github_contact/form/post',[GithubUrlOnController::class,'storeGithubContactForm'])->name('GithubContactForm.store');


Route::get('/members', function () {
    return view('members');
})->middleware(['auth', 'verified'])->name('members');
/*ダッシュボードはログインする前のホーム画面のようなもの（ログイン状態は保持される）*/

Route::middleware('auth')->group(function () {
    Route::get('/biography', [biographyController::class, 'edit'])->name('biography.edit');
    Route::patch('/biography', [biographyController::class, 'update'])->name('biography.update');
    Route::delete('/biography', [biographyController::class, 'destroy'])->name('biography.destroy');
});

require __DIR__.'/auth.php';
