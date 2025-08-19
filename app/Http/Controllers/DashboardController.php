<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Loan;

class DashboardController extends Controller
{
    public function index()
    {
        // Total koleksi buku
        $booksCount = Book::count();

        // Total pinjaman
        $loansCount = Loan::count();

        // Pinjaman aktif
        $activeLoans = Loan::where('status', 'Dipinjam')->count();

        // Ambil 4 buku terpopuler (urut berdasarkan jumlah dipinjam)
        $popularBooks = Book::orderBy('borrow_count', 'desc')
            ->take(4)
            ->get();

        return view('dashboard', compact(
            'booksCount',
            'loansCount',
            'activeLoans',
            'popularBooks'
        ));
    }
}
