<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\PostRequest;

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


    public function create()
    {
        return view('posts.create');
    }

    // フォームから送信されたデータは、ここで Request 型の $request でまとめて受け取ることができます。
    // public function store(Request $request)
    public function store(PostRequest $request)
    {
        // //リクエストの中身を検証
        // $request->validate([
        //     // 入力必須、最低三文字
        //     'title' => 'required|min:3',
        //     'body' => 'required',
        // ], [
        //     // 任意のエラーメッセージを表示
        //     'title.required' => 'タイトルは必須です',
        //     'title.min' => ':min 文字以上入力してください',
        //     'body.required' => '本文は必須です',
        // ]);


        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit')
            ->with(['post' => $post]);
    }

    public function update(PostRequest $request, Post $post)
    {
        // //リクエストの中身を検証
        // $request->validate([
        //     // 入力必須、最低三文字
        //     'title' => 'required|min:3',
        //     'body' => 'required',
        // ], [
        //     // 任意のエラーメッセージを表示
        //     'title.required' => 'タイトルは必須です',
        //     'title.min' => ':min 文字以上入力してください',
        //     'body.required' => '本文は必須です',
        // ]);


        // $post = new Post(); // 引数を利用
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();

        return redirect()
            ->route('posts.show', $post);
    }



}

