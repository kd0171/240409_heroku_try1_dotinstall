<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// コントローラーにメソッドを渡す
// Route::get('/', function () {
//     $posts = [
//         'Title A',
//         'Title B',
//         'Title C',
//     ];
//     return view('index')
//        ->with(['posts' => $posts]);;
//     //    左側が渡される側のphpでの変数名、右側は引数（この中で定義された変数）
// });


// Route::get('/', ['App\Http\Controllers\PostController', 'index']);
// Route::get('/', [App\Http\Controllers\PostController::class, 'index']);

// 事前にUseに書いておく必要がある
Route::get('/', [PostController::class, 'index'])
    ->name('posts.index');
// ルーティングですが、今 view でリンク先を指定するときに、直接この形式を書き込んでいるのですが、もしこの URL の構造が変わったら、それを指定しているすべてのリンク先を書き換えなくてはいけません。


// Route::get('/posts/0', [PostController::class, 'index']);
// Route::get('/posts/1', [PostController::class, 'index']);
// Route::get('/posts/2', [PostController::class, 'index']);
// PostControllerのshowメソッドを用いて変数としてidを渡す

// Route::get('/posts/{id}', [PostController::class, 'show'])
//     ->name('posts.show');
// id を受け取って、それをもとにデータを抽出して何らかの
Route::get('/posts/{post}', [PostController::class, 'show'])
    ->name('posts.show')
    ->where('post', '[0-9]+');


Route::get('/posts/create', [PostController::class, 'create'])
    ->name('posts.create');

Route::post('/posts/store', [PostController::class, 'store'])
    ->name('posts.store');

Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
    ->name('posts.edit')
    ->where('post', '[0-9]+');

// 実はデータを新規に作成するときは post 形式なのですが、データの一部を更新するときは patch 形式にしてねと言うルールがウェブの通信において定められています。
// edit.blade.php のこちらも patch にしたいところですが、 form タグの method 属性は patch に今のところ対応していないので、このように書いて、これから送信するのは patch 形式だよと明示的に指示してあげる必要があるので注意しておきましょう。
Route::patch('/posts/{post}/update', [PostController::class, 'update'])
    ->name('posts.update')
    ->where('post', '[0-9]+');

Route::delete('/posts/{post}/destroy', [PostController::class, 'destroy'])
    ->name('posts.destroy')
    ->where('post', '[0-9]+');
