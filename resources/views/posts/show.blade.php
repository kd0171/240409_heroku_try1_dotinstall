{{-- slotに入れたい内容はx-layout内に書いていく --}}
<x-layout>
    <x-slot name="title">
        {{ $post }} - My BBS
    </x-slot>

    <h1>My BBS(show)</h1>

    <div class="back-link">
        {{-- &laquo; <a href="/">Back</a> --}}
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>{{ $post }}</h1>
</x-layout>
