<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{config('app.name', "LL")}}</title>
        @yield('css')
    </head>
    <body>
        @include('inc.navbar')
        <div class="m-4 container">
            @include('inc.messages')
            @yield('content')
        </div>

        <script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>
