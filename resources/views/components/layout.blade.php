<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Exercise' }}</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 antialiased font-sans">
    <header class="bg-white shadow-sm">
        <div class="max-w-6xl mx-auto px-6 py-4">
            <a href="{{ route('homepage') }}">
                <img src="{{ asset('images/lsi-logo.svg') }}" alt="LSi" class="w-24 md:w-40">
            </a>
        </div>
    </header>

    @isset($navitems)
        <nav class="bg-gray-200">
            <div class="max-w-6xl mx-auto px-6 flex gap-8">
                @foreach($navitems as $navitem)
                    <a href="{{ $navitem->id == 1 ? url('/') : route('page.show', $navitem) }}" class="block py-4 text-gray-700 hover:text-brand font-medium transition-colors">{{ $navitem->title }}</a>
                @endforeach
            </div>
        </nav>
    @endisset

    <main class="bg-white min-h-screen">
        <div class="max-w-6xl mx-auto px-6 py-8">
            {{ $slot }}
        </div>
    </main>

    <footer class="border-t border-gray-200 bg-gray-100">
        <div class="max-w-6xl mx-auto px-6 py-4 text-sm text-gray-500">
            &copy; <a href="https://www.lsi.co.uk" target="_blank" class="text-brand hover:text-brand-dark transition-colors">LSi Ltd</a> 2023
        </div>
    </footer>
</body>
</html>