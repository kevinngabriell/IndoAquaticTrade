@php
use App\Models\About;
    $about = About::first();
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Language" content="{{ app()->getLocale() }}"> <!-- Dynamic language meta tag -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Panel Admin - {{ $about->name }} - {{ $about->sub }}</title>
        <!-- Tambahkan stylesheet atau CDN apapun yang Anda perlukan -->
        <meta content="{{ $about->description }}" name="description">
        <meta content="{{ $about->keywords }}" name="keywords">
        {{-- <title>Panel Admin - Aqutic Trade - Seafood Supreme, Everyone's Dream!</title> --}}
        <link href="{{ asset($about->favicon) }}" rel="icon">
        <link href="{{ asset($about->favicon) }}" rel="apple-touch-icon">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
