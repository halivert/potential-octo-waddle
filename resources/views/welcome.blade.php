<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <style>
            *, ::after, ::before {
                font-family: 'Figtree'
            }

            main {
                height: 100dvh;
                width: 100dvw;
                display: flex;
                place-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
        <main>
            <h1>Home</h1>
        </main>
    </body>
</html>
