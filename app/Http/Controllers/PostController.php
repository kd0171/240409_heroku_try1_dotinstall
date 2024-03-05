<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // private $posts = [
    //     'Title A',
    //     'Title B',
    //     'Title C',
    // ];

    public function index() {
        // $posts = [
        //     'Title A',
        //     'Title B',
        //     'Title C',
        // ];

        // $posts = Post::all();
        // $posts = Post::orderBy('created_at', 'desc')->get();
        $posts = Post::latest()->get();

        return view('index')
           ->with(['posts' => $posts]);;
        //    左側が渡される側のphpでの変数名、右側は引数（この中で定義された変数）
    }

    // public function show($id) // postをルーティングにすると不要

    public function show(Post $post)
    {
        // $post = Post::find($id);
        // if (!$post) {
        //     abort(404);
        // }
        //存在しないidへのアクセスの場合に正しくエラーを吐き出す
        // $post = Post::findOrFail($id); // postをルーティングにすると不要

        return view('posts.show')
            ->with(['post' => $post]);
    }
}
