<?php

namespace App\Http\Controllers;

use App\Models\Loan;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    public function index()
    {
        $loans = Loan::with(['user', 'book'])->latest()->paginate(10);
        return view('loans.index', compact('loans'));
    }

    public function create()
    {
        $books = Book::all();
        $users = User::all();
        return view('loans.create', compact('books', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id'    => 'required|exists:users,id',
            'book_id'    => 'required|exists:books,id',
            'loan_date'  => 'required|date',
            'return_date'=> 'nullable|date|after_or_equal:loan_date',
            'status'     => 'required|string'
        ]);

        Loan::create($request->all());

        return redirect()->route('loans.index')
                         ->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    public function edit(Loan $loan)
    {
        $books = Book::all();
        $users = User::all();
        return view('loans.edit', compact('loan', 'books', 'users'));
    }

    public function update(Request $request, Loan $loan)
    {
        $request->validate([
            'user_id'    => 'required|exists:users,id',
            'book_id'    => 'required|exists:books,id',
            'loan_date'  => 'required|date',
            'return_date'=> 'nullable|date|after_or_equal:loan_date',
            'status'     => 'required|string'
        ]);

        $loan->update($request->all());

        return redirect()->route('loans.index')
                         ->with('success', 'Peminjaman berhasil diperbarui.');
    }

    public function destroy(Loan $loan)
    {
        $loan->delete();
        return redirect()->route('loans.index')
                         ->with('success', 'Peminjaman berhasil dihapus.');
    }
}
