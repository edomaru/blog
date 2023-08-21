<x-app-layout>
    <div class="mt-10 space-y-5 prose max-w-none">
        <h1 class="not-prose">{{ $post->title }}</h1>
        <div class="text-sm">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
        <div>{{ $post->contents }}</div>
    </div>
</x-app-layout>