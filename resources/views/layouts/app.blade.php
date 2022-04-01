<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>

    <main class="min-vw-100 min-vh-100 d-flex flex-column">
        <div class="container my-auto">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>

  </body>
</html>
