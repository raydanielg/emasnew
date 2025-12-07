<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="icon" type="image/png" href="{{ asset('letter-m_9326491.png') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased bg-slate-950 text-slate-100" style="font-family: 'Poppins', system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;">
        <div class="min-h-screen flex flex-col lg:flex-row">
            <div class="w-full lg:w-1/2 flex items-center justify-center px-6 py-10 lg:px-16 lg:py-0 bg-slate-950">
                <div class="w-full max-w-md">
                    {{ $slot }}
                </div>
            </div>

            <div class="hidden lg:block lg:w-1/2 relative">
                <div class="absolute inset-0 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-900 opacity-80"></div>
                <img src="{{ asset('images/PXL_20250502_075450907.RAW-01.COVER.jpg') }}" alt="Auth background" class="h-full w-full object-cover" />
            </div>
        </div>
    </body>
</html>
