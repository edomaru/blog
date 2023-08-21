<x-app-layout>
    @if ($posts->count())
        <ul class="mt-10 space-y-10">
            @foreach ($posts as $post)
                <li>
                    <div class="space-y-5 prose max-w-none text-justify">
                        <h2 class="not-prose">
                            <a class="hover:text-indigo-700 transition-colors duration-100" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                        </h2>
                        <div>{{ $post->excerpt }}</div>
                        <div class="text-sm">Posted {{ $post->date->diffForHumans() }} by {{ $post->author }}</div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</x-app-layout>