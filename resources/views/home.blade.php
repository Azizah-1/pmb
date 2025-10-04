<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>PMB - Home</title>
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /*! tailwindcss v4.0.7 | MIT License | https://tailwindcss.com */
            @layer theme {
                :root,
                :host {
                    --font-sans: 'Instrument Sans', ui-sans-serif, system-ui, sans-serif,
                        "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
                }
            }
        </style>
    @endif
</head>
<body class="bg-white text-gray-900 font-sans min-h-screen flex flex-col">
    <header class="bg-red-600 text-white p-4 shadow-md">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-semibold">PMB Website</h1>
            <nav>
                @if (Route::has('login'))
                    <div class="space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="hover:underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="hover:underline">Log in</a>
                            {{-- Removed register link because route is not defined --}}
                        @endauth
                    </div>
                @endif
            </nav>
        </div>
    </header>

    <main class="flex-grow container mx-auto p-6">
        <section class="bg-red-100 rounded-lg p-8 mb-12 text-center">
            <h2 class="text-3xl font-bold mb-4">Welcome to PMB</h2>
            <p class="mb-6 text-lg">Join PMB and start your journey with us. Explore our programs and apply today!</p>
            {{-- Removed Get Started button because register route is not defined --}}
        </section>

        <section class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-2">Quality Education</h3>
                <p>We provide top-notch education with experienced faculty and modern facilities.</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-2">Diverse Programs</h3>
                <p>Choose from a wide range of study programs tailored to your interests and career goals.</p>
            </div>
            <div class="p-6 bg-gray-100 rounded-lg shadow">
                <h3 class="text-xl font-semibold mb-2">Scholarships & Support</h3>
                <p>We offer scholarships and support services to help you succeed throughout your studies.</p>
            </div>
        </section>
    </main>

    <footer class="bg-gray-200 text-gray-700 p-4 text-center">
        &copy; {{ date('Y') }} PMB. All rights reserved.
    </footer>
</body>
</html>
