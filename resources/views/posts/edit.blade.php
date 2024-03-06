{{-- slotに入れたい内容はx-layout内に書いていく --}}
<x-layout>
    <x-slot name="title">
        Edit Post - My BBS
    </x-slot>

    <div class="back-link">
        {{-- &laquo; <a href="/">Back</a> --}}
        &laquo; <a href="{{ route('posts.show', $post) }}">Back</a>
    </div>

    <h1>Edit Post</h1>

    <form method="post" action="{{ route('posts.update', $post) }}">
        {{-- edit.blade.php のこちらも patch にしたいところですが、 form タグの method 属性は patch に今のところ対応していないので、このように書いて、これから送信するのは patch 形式だよと明示的に指示してあげる必要があるので注意しておきましょう。 --}}
        @method('PATCH')
        @csrf
        <div class="form-group">
            <label>
                Title
                {{-- 編集用フォームに元の値を入れておく（oldの第二引数＝もしoldの値がなかった場合） --}}
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
                {{-- oldは入力された内容が残る --}}
            </label>
            {{-- titleにエラーがあった場合の処理 --}}
            @error('title')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>
                Body
                <textarea name="body">{{ old('body', $post->body) }}</textarea>
            </label>
            {{-- bodyにエラーがあった場合の処理 --}}
            @error('body')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-button">
            <button>Update</button>
        </div>
    </form>
</x-layout>
