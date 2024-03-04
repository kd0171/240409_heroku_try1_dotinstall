<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>My BBS</title>
    {{-- <link rel="stylesheet" href="css/style.css"> --}}
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>My BBS</h1>
        <ul>
            {{-- <li><?php echo htmlspecialchars($posts[0], ENT_QUOTES, 'UTF-8'); ?></li> --}}
            {{-- 二重カッコの中に入れると上と同じコードになる --}}
            {{-- <li>{{ $posts[0] }}</li>
            <li>{{ $posts[1] }}</li>
            <li>{{ $posts[2] }}</li> --}}

            {{-- bladeによるforeach構文 --}}
            {{-- @foreach ($posts as $post)
                <li>{{ $post }}</li>
            @endforeach --}}

            {{-- bladeによるforelse構文：データが空の場合の処理を@emptyの後に書ける --}}
            {{-- @forelse ($posts as $post)
                <li>{{ $post }}</li> --}}

            {{-- $index => $postのindexには配列のインデックスが入る --}}
            @forelse ($posts as $index => $post)　
                <li>
                    {{-- <a href="/posts/{{ $index }}"> --}}
                    <a href="{{ route('posts.show', $index) }}">
                        {{ $post }}
                    </a>
                </li>
            @empty
                <li>No posts yet!</li>
            @endforelse

            {{-- <li>Title</li>
            <li>Title</li>
            <li>Title</li> --}}
        </ul>
    </div>
</body>
</html>
