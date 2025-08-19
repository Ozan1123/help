@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-100">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gradient-to-br from-blue-400/20 to-purple-600/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gradient-to-br from-green-400/20 to-blue-600/20 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>

    <div class="relative z-10 p-6 lg:p-8">
        <!-- Header Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between">
                <div>
                    <h1 class="text-4xl lg:text-5xl font-bold bg-gradient-to-r from-gray-900 via-blue-900 to-purple-900 bg-clip-text text-transparent mb-2">
                        Selamat Datang, Admin 👋
                    </h1>
                    <p class="text-gray-600 text-lg">Kelola data perpustakaan dengan mudah dari dashboard yang modern ini.</p>
                </div>
                <div class="hidden lg:block">
                    <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-4 shadow-lg border border-white/20">
                        <div class="text-sm text-gray-500 mb-1">Hari ini</div>
                        <div class="text-xl font-bold text-gray-800" id="current-date"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Statistics Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6 mb-8">
            <!-- Jumlah Buku -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </div>
                        <div class="text-sm opacity-80">📚</div>
                    </div>
                    <h3 class="text-lg font-medium mb-2">Jumlah Buku</h3>
                    <div class="flex items-end justify-between">
                        <span class="text-3xl font-bold">120</span>
                        <span class="text-sm opacity-80">+12 bulan ini</span>
                    </div>
                </div>
            </div>

            <!-- Jumlah User -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-green-500 to-emerald-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM9 16a1 1 0 01-1-1v-2a3 3 0 013-3h2a3 3 0 013 3v2a1 1 0 01-1 1H9z"/>
                            </svg>
                        </div>
                        <div class="text-sm opacity-80">👥</div>
                    </div>
                    <h3 class="text-lg font-medium mb-2">Total User</h3>
                    <div class="flex items-end justify-between">
                        <span class="text-3xl font-bold">45</span>
                        <span class="text-sm opacity-80">+5 minggu ini</span>
                    </div>
                </div>
            </div>

            <!-- Pinjaman Aktif -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-yellow-500 to-orange-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M4 3a2 2 0 100 4h12a2 2 0 100-4H4zM3 8a2 2 0 00-2 2v6a2 2 0 002 2h14a2 2 0 002-2v-6a2 2 0 00-2-2H3z"/>
                            </svg>
                        </div>
                        <div class="text-sm opacity-80">📖</div>
                    </div>
                    <h3 class="text-lg font-medium mb-2">Pinjaman Aktif</h3>
                    <div class="flex items-end justify-between">
                        <span class="text-3xl font-bold">8</span>
                        <span class="text-sm opacity-80">-2 dari kemarin</span>
                    </div>
                </div>
            </div>

            <!-- Total Transaksi -->
            <div class="group relative overflow-hidden bg-gradient-to-br from-purple-500 to-pink-600 rounded-2xl p-6 text-white transform hover:scale-105 transition-all duration-300 shadow-xl hover:shadow-2xl">
                <div class="absolute inset-0 bg-white/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                <div class="relative z-10">
                    <div class="flex items-center justify-between mb-4">
                        <div class="p-3 bg-white/20 rounded-xl backdrop-blur-sm">
                            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"/>
                            </svg>
                        </div>
                        <div class="text-sm opacity-80">📊</div>
                    </div>
                    <h3 class="text-lg font-medium mb-2">Total Transaksi</h3>
                    <div class="flex items-end justify-between">
                        <span class="text-3xl font-bold">247</span>
                        <span class="text-sm opacity-80">bulan ini</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mb-8">
            <!-- Aktivitas Terbaru -->
            <div class="xl:col-span-2">
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-white/20">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-800">Aktivitas Terbaru</h2>
                        <button class="px-4 py-2 bg-blue-100 hover:bg-blue-200 text-blue-700 rounded-xl transition-colors duration-200">
                            Lihat Semua
                        </button>
                    </div>
                    <div class="space-y-4">
                        <div class="flex items-center p-4 bg-gradient-to-r from-blue-50 to-indigo-50 rounded-xl border-l-4 border-blue-500 transform hover:scale-[1.02] transition-all duration-200">
                            <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                UA
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-gray-800 font-medium">User A meminjam "Buku Pemrograman Web"</p>
                                <p class="text-gray-500 text-sm">2 jam yang lalu</p>
                            </div>
                            <div class="text-blue-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="flex items-center p-4 bg-gradient-to-r from-green-50 to-emerald-50 rounded-xl border-l-4 border-green-500 transform hover:scale-[1.02] transition-all duration-200">
                            <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                UB
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-gray-800 font-medium">User B mengembalikan "Database Design"</p>
                                <p class="text-gray-500 text-sm">5 jam yang lalu</p>
                            </div>
                            <div class="text-green-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"/>
                                </svg>
                            </div>
                        </div>

                        <div class="flex items-center p-4 bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl border-l-4 border-purple-500 transform hover:scale-[1.02] transition-all duration-200">
                            <div class="w-10 h-10 bg-purple-500 rounded-full flex items-center justify-center text-white text-sm font-bold">
                                UC
                            </div>
                            <div class="ml-4 flex-1">
                                <p class="text-gray-800 font-medium">User C menambah koleksi "Machine Learning"</p>
                                <p class="text-gray-500 text-sm">1 hari yang lalu</p>
                            </div>
                            <div class="text-purple-500">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Notifikasi & Quick Actions -->
            <div class="space-y-6">
                <!-- Notifikasi -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-white/20">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Notifikasi</h2>
                    <div class="space-y-3">
                        <div class="flex items-start p-3 bg-red-50 rounded-xl border-l-4 border-red-500">
                            <div class="text-red-500 mr-3 mt-1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 font-medium">5 buku belum dikembalikan</p>
                                <p class="text-gray-500 text-xs">Batas waktu sudah terlewat</p>
                            </div>
                        </div>

                        <div class="flex items-start p-3 bg-green-50 rounded-xl border-l-4 border-green-500">
                            <div class="text-green-500 mr-3 mt-1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 font-medium">Sistem backup berhasil</p>
                                <p class="text-gray-500 text-xs">Data telah diamankan</p>
                            </div>
                        </div>

                        <div class="flex items-start p-3 bg-orange-50 rounded-xl border-l-4 border-orange-500">
                            <div class="text-orange-500 mr-3 mt-1">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-800 font-medium">Perpustakaan tutup hari Minggu</p>
                                <p class="text-gray-500 text-xs">Informasi untuk pengunjung</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-white/20">
                    <h2 class="text-2xl font-bold text-gray-800 mb-6">Quick Actions</h2>
                    <div class="grid grid-cols-2 gap-3">
                        <button class="p-4 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                            <div class="text-2xl mb-2">📚</div>
                            <div class="text-sm font-medium">Tambah Buku</div>
                        </button>
                        <button class="p-4 bg-gradient-to-r from-green-500 to-green-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                            <div class="text-2xl mb-2">👤</div>
                            <div class="text-sm font-medium">Tambah User</div>
                        </button>
                        <button class="p-4 bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                            <div class="text-2xl mb-2">📊</div>
                            <div class="text-sm font-medium">Laporan</div>
                        </button>
                        <button class="p-4 bg-gradient-to-r from-orange-500 to-orange-600 text-white rounded-xl hover:shadow-lg transform hover:scale-105 transition-all duration-200">
                            <div class="text-2xl mb-2">⚙️</div>
                            <div class="text-sm font-medium">Pengaturan</div>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Stats -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 shadow-xl border border-white/20">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Statistik Bulan Ini</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-2">32</div>
                    <div class="text-gray-600 text-sm">Buku Dipinjam</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600 mb-2">28</div>
                    <div class="text-gray-600 text-sm">Buku Dikembalikan</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-2">15</div>
                    <div class="text-gray-600 text-sm">User Baru</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-600 mb-2">95%</div>
                    <div class="text-gray-600 text-sm">Tingkat Kepuasan</div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
// Update current date
document.addEventListener('DOMContentLoaded', function() {
    const dateElement = document.getElementById('current-date');
    if (dateElement) {
        const now = new Date();
        const options = {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        };
        dateElement.textContent = now.toLocaleDateString('id-ID', options);
    }
});
</script>
@endsection
