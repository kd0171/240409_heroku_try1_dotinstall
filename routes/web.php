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
Route::get('/', [PostController::class, 'index']);
