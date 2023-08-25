<ul class="mt-10 space-y-10">
    @foreach ($posts as $post)
        <x-post-item :post="$post" />
    @endforeach
</ul>