<x-app-layout>
    @if ($posts->count())
        <h1 class="mt-10 text-3xl font-semibold">Latest post by {{ $authorName }}</h1>

        <x-post-items :posts="$posts" />
    @endif
</x-app-layout>