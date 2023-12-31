<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    @vite('resources/css/app.css')

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
    <x-layouts.header />

    <div class="flex flex-col justify-between">
        <main class="my-16">
            <div class="mx-auto max-w-3xl px-3 sm:px-6 xl:max-w-5xl xl:px-0">
                {{ $slot }}
            </div>
        </main>
    </div>

    <x-layouts.footer/>
</body>

</html>
