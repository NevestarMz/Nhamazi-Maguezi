<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Carbon\Carbon; // Para formatar a data
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        // Vai buscar todos os artigos, ordenados dos mais recentes para os mais antigos
        $articlesFromDB = Article::latest()->get();

        // Mapeia os dados da Base de Dados para a estrutura que o teu JS espera
        $articles = $articlesFromDB->map(function ($article) {
            return [
                'id' => $article->id,
                'title' => $article->title,
                'slug' => $article->slug,
                'category' => $article->category,
                // Formata a data para ficar como "15 Mar, 2026"
                'date' => Carbon::parse($article->created_at)->translatedFormat('d M, Y'),
                // Cria o link completo para a imagem guardada no storage
                'img' => asset('storage/' . $article->img_path),
                'author' => $article->author,
                'desc' => $article->desc,
            ];
        });

        // Envia a variável $articles para a tua view do blog
        return view('pages.blog', compact('articles'));
    }

    public function show(Article $article) 
    {
        // O Laravel faz o "Route Model Binding" automaticamente
        // Ele procura o artigo pelo slug que passamos na URL
        
        $recentArticles = Article::where('id', '!=', $article->id)
            ->latest()
            ->take(3)
            ->get();

        return view('pages.blog-show', compact('article', 'recentArticles'));
    }
}