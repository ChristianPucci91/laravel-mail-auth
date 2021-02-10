<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Mail test</title>
  </head>
  <body>

    <div class="container">

      <h1>Hello world! to {{ Auth::user() -> name }}</h1>

      <p> {{ $text }}</p>

    </div>

  </body>
</html>
