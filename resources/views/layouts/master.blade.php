<!DOCTYPE html>
<html>
    <head>
        <title>Master Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('public/css/app.css') }}">
    </head>
    <body>
        @include('layouts.navbar')
        <br>
      <div class="container">
          @include('layouts.messages')
          @yield('body')
      </div>

        <script src="{{ asset('/vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
    
</html>