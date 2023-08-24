<li>
    <div class="space-y-5 prose max-w-none text-justify">
        <h2 class="not-prose">
            <a class="hover:text-indigo-700 transition-colors duration-100" href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
        </h2>
        <div>{{ $post->excerpt }}</div>
        <x-post-meta :post="$post" />
    </div>
</li>