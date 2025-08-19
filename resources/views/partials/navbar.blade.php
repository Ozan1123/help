<nav class="bg-gradient-to-r from-blue-700 to-indigo-700 shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            {{-- Logo & Brand --}}
            <div class="flex items-center">
                <a href="{{ url('/') }}" class="flex items-center space-x-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/29/29302.png"
                         class="h-8 w-8" alt="Logo">
                    <span class="text-white font-bold text-xl tracking-wide">Perpus<span class="text-yellow-300">Online</span></span>
                </a>
            </div>

            {{-- Navigation Links --}}
            <div class="hidden md:flex items-center space-x-6">
                <a href="{{ url('/dashboard') }}"
                   class="text-white hover:text-yellow-300 transition font-medium">Dashboard</a>
                <a href="{{ url('/koleksi') }}"
                   class="text-white hover:text-yellow-300 transition font-medium">Koleksi</a>
                <a href="{{ url('/artikel') }}"
                   class="text-white hover:text-yellow-300 transition font-medium">Artikel</a>
            </div>

            {{-- User Menu --}}
            <div class="flex items-center space-x-4">
                <span class="hidden sm:block text-white font-medium">
                    👋 Hai, {{ Auth::user()->name ?? 'Guest' }}
                </span>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-lg shadow-md transition">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</nav>

{{-- Spacer biar konten gak ketiban navbar --}}
<div class="h-16"></div>
