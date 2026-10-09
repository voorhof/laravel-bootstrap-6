<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    {{-- Styles / Scripts --}}
    @fonts

    @if(file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif

    {{--
    <script type="importmap">
        {
          "imports": {
            "@floating-ui/dom": "https://cdn.jsdelivr.net/npm/@floating-ui/dom@1.7.6/dist/floating-ui.dom.esm.min.js",
            "vanilla-calendar-pro": "https://cdn.jsdelivr.net/npm/vanilla-calendar-pro@3.4.0/index.mjs"
          }
        }
    </script>
    --}}
</head>
<body>
<header class="container">
    <h1>{{ config('app.name') }}</h1>
    <hr>
</header>

<main class="container">
    <h2>MAIN</h2>
    <h3>Button</h3>
    <button type="button" class="btn theme-primary btn-solid btn-styled">Button</button>
</main>

<footer class="container">
    <hr>
    <h2>FOOTER</h2>
</footer>
</body>
</html>
