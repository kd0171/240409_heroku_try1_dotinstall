<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private $posts = [
        'Title A',
        'Title B',
        'Title C',
    ];

    public function index() {
        // $posts = [
        //     'Title A',
        //     'Title B',
        //     'Title C',
        // ];
        return view('index')
           ->with(['posts' => $this->posts]);;
        //    左側が渡される側のphpでの変数名、右側は引数（この中で定義された変数）
    }

    public function show($id)
    {
        return view('posts.show')
            ->with(['post' => $this->posts[$id]]);
    }
}
