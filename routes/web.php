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
Route::get('/posts/{id}', [PostController::class, 'show'])
    ->name('posts.show');
