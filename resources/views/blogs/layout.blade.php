<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Simple Blogs - Laravel 7 | Rikky</title>
<link href="{{ url('/css/app.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('/favicon.ico') }}" rel="icon">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
  <header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="/blogs" class="navbar-brand d-flex align-items-center">
        <strong>Blogs</strong>
      </a>
      <a style="text-decoration: text-white" href="{{ route('blogs.create') }}">
        <span>Create Blog</span>
      </a>
    </div>
  </div>
</header>

<main>
<div class="album py-5 bg-light">
<div class="container">
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

  @yield('content')

</div>
</div>
</div>

</main>
  <footer class="text-muted py-5">
  <div class="container">
    <p class="mb-1">Simple Blogs &copy; Rikky</p>
  </div>
</footer>
    <script src="{{ url('/js/app.js') }}"></script>
  </body>
</html>