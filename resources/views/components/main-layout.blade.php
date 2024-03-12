<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="icon" type="image/x-icon" href="{{ asset('/images/components/favicon.svg')}}">
        <title>Task Manager</title>
        @vite('resources/css/app.css')
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
