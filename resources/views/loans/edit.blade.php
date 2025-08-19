@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">✏️ Edit Pinjaman</h2>

    <!-- Form Edit Pinjaman -->
    <div class="bg-white/10 backdrop-blur-lg shadow rounded-xl p-6 border border-white/20">
        <form action="{{ route('loans.update', $loan->id) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <!-- Nama Peminjam -->
            <div>
                <label for="user_id" class="block text-sm font-medium text-gray-200">Peminjam</label>
                <select id="user_id" name="user_id" class="mt-1 w-full p-2 rounded-lg bg-blue-900/40 text-white border border-white/20">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ $loan->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Judul Buku -->
            <div>
                <label for="book_id" class="block text-sm font-medium text-gray-200">Buku</label>
                <select id="book_id" name="book_id" class="mt-1 w-full p-2 rounded-lg bg-blue-900/40 text-white border border-white/20">
                    @foreach($books as $book)
                        <option value="{{ $book->id }}" {{ $loan->book_id == $book->id ? 'selected' : '' }}>
                            {{ $book->title }}
                        </option>
                    @endforeach
                </select>
            </div>

            <!-- Tanggal Pinjam -->
            <div>
                <label for="loan_date" class="block text-sm font-medium text-gray-200">Tanggal Pinjam</label>
                <input type="date" id="loan_date" name="loan_date"
                       value="{{ $loan->loan_date }}"
                       class="mt-1 w-full p-2 rounded-lg bg-blue-900/40 text-white border border-white/20">
            </div>

            <!-- Tanggal Kembali -->
            <div>
                <label for="return_date" class="block text-sm font-medium text-gray-200">Tanggal Kembali</label>
                <input type="date" id="return_date" name="return_date"
                       value="{{ $loan->return_date }}"
                       class="mt-1 w-full p-2 rounded-lg bg-blue-900/40 text-white border border-white/20">
            </div>

            <!-- Status -->
            <div>
                <label for="status" class="block text-sm font-medium text-gray-200">Status</label>
                <select id="status" name="status" class="mt-1 w-full p-2 rounded-lg bg-blue-900/40 text-white border border-white/20">
                    <option value="Dipinjam" {{ $loan->status == 'Dipinjam' ? 'selected' : '' }}>Dipinjam</option>
                    <option value="Dikembalikan" {{ $loan->status == 'Dikembalikan' ? 'selected' : '' }}>Dikembalikan</option>
                </select>
            </div>

            <!-- Tombol -->
            <div class="flex justify-end space-x-3 mt-6">
                <a href="{{ route('loans.index') }}"
                   class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded-lg">
                    Batal
                </a>
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
