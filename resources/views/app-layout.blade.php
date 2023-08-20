<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  @vite('resources/css/app.css')
</head>
<body>
  <div class="container mx-auto py-10">
      <h1 class="text-3xl font-bold">
        My Personal Blog
      </h1>

      @yield('content')
  </div>
</body>
</html>