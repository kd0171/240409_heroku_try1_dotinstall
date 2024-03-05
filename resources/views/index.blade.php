{{-- slotに入れたい内容はx-layout内に書いていく --}}
<x-layout>
    <x-slot name="title">
        My BBS
    </x-slot>


    <h1>
        <span>My BBS</span>
        <a href="{{ route('posts.create') }}">[Add]</a>
    </h1>
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
        @forelse ($posts as $post)
            <li>
                {{-- <a href="/posts/{{ $index }}"> --}}
                {{-- <a href="{{ route('posts.show', $post->id) }}"> // postをルーティングにすると不要 --}}

                <a href="{{ route('posts.show', $post) }}">
                    {{ $post->title }}
                </a>
            </li>
        @empty
            <li>No posts yet!</li>
        @endforelse

        {{-- <li>Title</li>
        <li>Title</li>
        <li>Title</li> --}}
    </ul>
</x-layout>
