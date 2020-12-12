<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catch Attendace</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
 <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> 
 
</head>
<body>
  <div class="lg:container lg:mx-auto">
    <div class="box-border md:box-content ...">
    @yield('main')
  </div>
  </div>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>
</html>