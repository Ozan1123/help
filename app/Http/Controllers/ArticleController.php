<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::where('user_id', Auth::id())->get();
        return view('articles.index', compact('articles'));
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => Auth::id(),
        ]);

        return redirect('/articles')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit(Article $article) {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article) {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $article->update($request->all());
        return redirect('/articles')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Article $article) {
        $article->delete();
        return redirect('/articles')->with('success', 'Artikel berhasil dihapus');
    }
}
