<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = [
            'Title A',
            'Title B',
            'Title C',
        ];
        return view('index')
           ->with(['posts' => $posts]);;
        //    左側が渡される側のphpでの変数名、右側は引数（この中で定義された変数）
    }
}
