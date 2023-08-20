<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Blog</title>
</head>
<body>
    <h1>My personal blog</h1>
    @if ($posts->count())
        <ul>
            @foreach ($posts as $post)
                <li><a href="/posts/{{ $post->slug }}">{{ $post->slug }}</a></li>
            @endforeach
        </ul>
    @endif
</body>
</html>