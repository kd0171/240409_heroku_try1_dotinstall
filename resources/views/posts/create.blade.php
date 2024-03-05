{{-- slotに入れたい内容はx-layout内に書いていく --}}
<x-layout>
    <x-slot name="title">
        Add New Post - My BBS
    </x-slot>

    <div class="back-link">
        {{-- &laquo; <a href="/">Back</a> --}}
        &laquo; <a href="{{ route('posts.index') }}">Back</a>
    </div>

    <h1>Add New Post</h1>
</x-layout>
