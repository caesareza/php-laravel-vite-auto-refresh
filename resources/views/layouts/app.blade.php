<html>
    <head>
        <title>App Name - @yield('title')</title>
        @vite(['resources/css/app.css', 'resouces/js/app.js'])
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>