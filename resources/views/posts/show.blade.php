{{-- slotに入れたい内容はx-layout内に書いていく --}}
<x-layout>
    <x-slot name="title">
        {{ $post->title }} - My BBS
    </x-slot>

    <h1>My BBS(show)</h1>

    <div class="back-link">
        {{-- &laquo; <a href="/">Back</a> --}}
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>
        {{ $post->title}}
        <a href="{{ route('posts.edit', $post) }}">[Edit]</a>
        <form method="post" action="{{ route('posts.destroy', $post) }}" id="delete_post">
            @method('DELETE')
            @csrf

            <button class="btn">[x]</button>
        </form>
    </h1>




    {{-- <p>{{ $post->body }}</p> --}}
    {{-- 改行の表示：これだとbrタグが表示されてしまう --}}
    {{-- <p>{nl2br($post->body)}</p> --}}
    {{-- !!で文字実態参照への変換を無効→悪意のあるこーその対策必要 --}}
    {{-- <p>{!! nl2br($post->body) !!}</p> --}}
    {{-- htmlspecialchars を使えば良いのですが、 Laravel では e() を使って短く書ける --}}
    <p>{!! nl2br(e($post->body)) !!}</p>


    <script>
        // 厳密なエラーチェック
        'use strict';

        {
            document.getElementById('delete_post').addEventListener('submit', e => {
                e.preventDefault();

                if (!confirm('Sure to delete?')) {
                    return;
                }

                e.target.submit();
            });
        }
    </script>
</x-layout>
