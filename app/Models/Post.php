<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


// Post -> posts モデルの名前を Post としたことで、デフォルトだと posts テーブルに紐付けてくれるという仕組みになっています。
class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];
}
