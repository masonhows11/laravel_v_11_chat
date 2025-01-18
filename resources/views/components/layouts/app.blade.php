<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? '.::Laravel Reverb::.' }}</title>
        @vite(
            [
                'resources/css/app.css',
                'resources/js/app.js'
            ]
        )
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
