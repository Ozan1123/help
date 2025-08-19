@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold text-white mb-6">📑 Daftar Pinjaman Buku</h2>

    <!-- Tombol Tambah -->
    <div class="mb-4">
        <a href="{{ route('loans.create') }}"
           class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg text-sm">
            + Tambah Pinjaman
        </a>
    </div>

    <!-- Tabel Pinjaman -->
    <div class="bg-white/10 backdrop-blur-lg shadow rounded-xl p-6 border border-white/20">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse text-gray-200">
                <thead>
                    <tr class="bg-blue-900 text-left">
                        <th class="px-4 py-2 text-sm font-medium">Peminjam</th>
                        <th class="px-4 py-2 text-sm font-medium">Judul Buku</th>
                        <th class="px-4 py-2 text-sm font-medium">Tanggal Pinjam</th>
                        <th class="px-4 py-2 text-sm font-medium">Tanggal Kembali</th>
                        <th class="px-4 py-2 text-sm font-medium">Status</th>
                        <th class="px-4 py-2 text-sm font-medium">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Data dari DB -->
                    @foreach($loans as $loan)
                    <tr class="border-t border-white/20">
                        <td class="px-4 py-2">{{ $loan->user->name }}</td>
                        <td class="px-4 py-2">{{ $loan->book->title }}</td>
                        <td class="px-4 py-2">{{ $loan->loan_date }}</td>
                        <td class="px-4 py-2">{{ $loan->return_date ?? '-' }}</td>
                        <td class="px-4 py-2">
                            <span class="bg-{{ $loan->status == 'Dipinjam' ? 'green' : 'gray' }}-600 text-white text-xs px-2 py-1 rounded">
                                {{ $loan->status }}
                            </span>
                        </td>
                        <td class="px-4 py-2 flex space-x-3">
                            <!-- Tombol Edit -->
                            <a href="{{ route('loans.edit', $loan->id) }}"
                               class="text-blue-400 hover:underline">
                                Edit
                            </a>

                            <!-- Tombol Hapus -->
                            <form action="{{ route('loans.destroy', $loan->id) }}"
                                  method="POST"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')"
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-400 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach

                    @if($loans->isEmpty())
                    <tr>
                        <td colspan="6" class="text-center py-4 text-gray-400">
                            Belum ada data pinjaman.
                        </td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $loans->links() }}
        </div>
    </div>
</div>
@endsection
