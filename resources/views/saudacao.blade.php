<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Primeira Página :D</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @for ($i=0; $i < 100; $i++)
      <div class="container">
        <h1>Olá {{$i+1}}  </h1>
      </div>
    @endfor
    <script type="text/javascript" scr="/js/app.js">

    </script>
  </body>
</html>
