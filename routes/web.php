<?php

use App\Http\Controllers\Admin\WriterController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/blog', [BlogController::class, 'index'])->name('pages.blog');

// Usamos {article:slug} para forçar a procura pela coluna slug
Route::get('/blog/{article:slug}', [BlogController::class, 'show'])->name('pages.blog-show');

// Agrupamos as rotas do painel com um prefixo
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/artigos', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/artigos/novo', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/artigos', [ArticleController::class, 'store'])->name('articles.store');

    // Novas rotas para editar e eliminar
    Route::delete('/artigos/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    Route::get('/artigos/{article}/editar', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/artigos/{article}', [ArticleController::class, 'update'])->name('articles.update');

    // NOVA: Rota para upload de imagens DEIXO do editor
    Route::post('/admin/articles/upload', [ArticleController::class, 'upload'])
    ->name('admin.articles.upload');

    // Novas rotas de Escritores
    Route::resource('writers', WriterController::class);
});