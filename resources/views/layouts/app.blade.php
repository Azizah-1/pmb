<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Custom layout styles */
        .layout-container {
            position: relative;
            z-index: 10;
        }
    </style>
    {{-- allow views to push additional styles --}}
    @stack('styles')
    </head>
    <body class="font-sans antialiased">
        @if(request()->routeIs('beranda') || request()->is('/'))
            {{-- For beranda: render slot without global boxed background or decorative accents --}}
            <div class="min-h-screen relative">
                @include('layouts.navigation')
                <main class="relative z-10 w-full">
                    {{ $slot }}
                </main>
            </div>
        @else
            <div class="min-h-screen !bg-white relative overflow-hidden">
                <!-- Decorative Accessories -->
                <div class="fixed top-0 left-0 w-40 h-40 opacity-20 pointer-events-none select-none">
                    <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="40" cy="40" r="40" fill="#FFEDD5" />
                    </svg>
                </div>
                <div class="fixed bottom-0 right-0 w-56 h-56 opacity-20 pointer-events-none select-none">
                    <svg viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="20" y="20" width="60" height="60" rx="20" fill="#FDE68A" />
                    </svg>
                </div>
                <div class="layout-container">
                    <!-- Navigation Bar -->
                    <div class="bg-white shadow-lg rounded-b-2xl border-b border-orange-100 relative z-20">
                        @include('layouts.navigation')
                    </div>

                    <!-- Decorative Divider -->
                    <div class="w-full flex justify-center my-2 relative z-10">
                        <svg height="12" width="120" class="opacity-40">
                            <ellipse cx="60" cy="6" rx="55" ry="5" fill="#FFEDD5" />
                        </svg>
                    </div>

                    <!-- Page Heading -->
                    @isset($header)
                        <header class="bg-white shadow-md rounded-xl mx-auto max-w-5xl mt-6 mb-2 px-6 py-4 relative z-10 border border-orange-100">
                            <div class="text-2xl font-bold text-orange-500">{{ $header }}</div>
                        </header>
                    @endisset

                    <!-- Page Content -->
                    <main class="relative z-10 mx-auto max-w-5xl mt-4 mb-8 px-4 py-6 bg-white rounded-2xl shadow-lg border border-orange-100">
                        {{ $slot }}
                    </main>
                </div>
            </div>
        @endif
        {{-- allow views to push additional scripts --}}
        @stack('scripts')
        @push('scripts')
            <script>
                document.addEventListener('DOMContentLoaded', function(){
                    const guestDaftar = document.getElementById('guest-daftar');
                    if (!guestDaftar) return;
                    guestDaftar.addEventListener('click', function(e){
                        const authShell = document.getElementById('authShell');
                        if (authShell) {
                            // prevent navigation and trigger register panel if present
                            e.preventDefault();
                            authShell.classList.add('register-active');
                            // create a focusable element on panel
                            const panelContent = authShell.querySelector('.panel-content');
                            if (panelContent) panelContent.focus?.();
                        }
                    });
                });
            </script>
        @endpush
    </body>
</html>
