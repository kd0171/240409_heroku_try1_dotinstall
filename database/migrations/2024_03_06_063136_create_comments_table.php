<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            // postsテーブルの id カラムに紐付けたいので、それと同じ型で post_id という名前にしておくと posts テーブルの id カラムに紐付くのだなと Laravel が解釈
            $table->unsignedBigInteger('post_id');
            $table->string('body');
            $table->timestamps();
            $table
                ->foreign('post_id')
                ->references('id')
                ->on('posts')
                // この posts テーブルでレコードが削除されたら関連するコメントも削除されるように onDelete('cascade') という設定も追加しておきましょう。
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
