<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpus Online</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-blue-950 font-sans antialiased text-gray-100">

    <!-- Navbar -->
    <header class="fixed top-0 left-0 right-0 bg-blue-900 shadow z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-xl font-bold text-white">📚 PerpusOnline</a>

            <nav class="hidden md:flex items-center space-x-6 text-white">
                <a href="{{ route('dashboard') }}" class="hover:text-blue-300">Dashboard</a>
                <a href="{{ route('books.index') }}" class="hover:text-blue-300">Koleksi</a>

               @if (Route::has('loans.index'))
                <a href="{{ route('loans.index') }}" class="hover:text-blue-300">Peminjaman</a>
                @else
                    <span class="opacity-50 cursor-not-allowed">Peminjaman</span>
                @endif

            </nav>

            <div class="flex items-center space-x-3">
                @auth
                    <div class="relative group">
                        <button class="text-sm text-white bg-white/10 px-3 py-1 rounded-lg">
                            👋 {{ Auth::user()->name }}
                        </button>
                        <div class="absolute right-0 mt-2 hidden group-hover:block bg-white text-gray-800 rounded-lg shadow min-w-40">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100 text-red-600">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="bg-white text-blue-900 px-3 py-1 rounded-lg text-sm font-medium">Login</a>
                    <a href="{{ route('register') }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded-lg text-sm font-medium">Register</a>
                @endguest
            </div>
        </div>
    </header>

    <!-- Content -->
    <main class="pt-24 px-6">
        @yield('content')
    </main>

</body>
</html>
