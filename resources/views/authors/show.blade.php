<x-app-layout>
    @if ($posts->count())
        <h1 class="mt-10 text-3xl font-semibold">Latest post by {{ $authorName }}</h1>

        <ul class="mt-10 space-y-10">
            @foreach ($posts as $post)
                <x-post-item :post="$post" />
            @endforeach
        </ul>
    @endif
</x-app-layout>