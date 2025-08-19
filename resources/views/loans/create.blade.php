@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">➕ Tambah Pinjaman</h2>

    <div class="bg-white/10 backdrop-blur-lg shadow rounded-xl p-6 border border-white/20">
        <form action="{{ route('loans.store') }}" method="POST" class="space-y-6">
            @csrf

            <!-- Pilih Anggota -->
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-200">Anggota</label>
                <select name="user_id" id="user_id" class="mt-2 block w-full bg-blue-900/40 border border-white/20 text-gray-200 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Anggota --</option>
                    {{-- nanti looping data user --}}
                    <option value="1">Fauzan</option>
                    <option value="2">Budi</option>
                </select>
            </div>

            <!-- Pilih Buku -->
            <div>
                <label for="book_id" class="block text-sm font-medium text-gray-200">Buku</label>
                <select name="book_id" id="book_id" class="mt-2 block w-full bg-blue-900/40 border border-white/20 text-gray-200 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
                    <option value="">-- Pilih Buku --</option>
                    {{-- nanti looping data buku --}}
                    <option value="1">Belajar Laravel</option>
                    <option value="2">Dasar Pemrograman</option>
                </select>
            </div>

            <!-- Tanggal Pinjam -->
            <div>
                <label for="loan_date" class="block text-sm font-medium text-gray-200">Tanggal Pinjam</label>
                <input type="date" name="loan_date" id="loan_date" class="mt-2 block w-full bg-blue-900/40 border border-white/20 text-gray-200 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Tanggal Kembali -->
            <div>
                <label for="return_date" class="block text-sm font-medium text-gray-200">Tanggal Kembali</label>
                <input type="date" name="return_date" id="return_date" class="mt-2 block w-full bg-blue-900/40 border border-white/20 text-gray-200 rounded-lg p-2 focus:ring-2 focus:ring-blue-500">
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3">
                <a href="{{ route('loans.index') }}" class="px-4 py-2 bg-gray-600 hover:bg-gray-700 text-white rounded-lg">
                    Batal
                </a>
                <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
