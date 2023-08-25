<div class="flex items-center justify-between">
    <div class="text-sm">Posted {{ $post->date->diffForHumans() }} by <a class="no-underline text-indigo-500 hover:text-indigo-700 transition-colors duration-100" href="/authors/{{ $post->author }}">{{ $post->author_name }}</a></div>
    @if(count($post->tags))
        <div class="flex flex-row items-center space-x-2">
            @foreach ($post->tags as $tag)
                <a class="hover:opacity-75 transition-opacity duration-100 ease-in" href="/tags/{{ $tag }}">
                    <span class="bg-indigo-500 text-white capitalize inline-flex items-center px-3 py-0.5 rounded-full text-xs font-semibold leading-5">{{ $tag }}</span>
                </a>
            @endforeach
        </div>
    @endif
</div>