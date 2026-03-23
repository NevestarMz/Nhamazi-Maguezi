<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Importa no topo do ficheiro
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    // Mostra a lista de artigos no painel
    public function index()
    {
        // Procura todos os artigos na DB
        $articles = Article::latest()->get();
        
        // Retorna a view que acabámos de criar
        return view('admin.articles.index', compact('articles'));
    }

    // Mostra o formulário para criar
    public function create()
    {
        $writers = Writer::all();
        return view('admin.articles.create', compact('writers'));
    }

    // Guarda o artigo na base de dados
    public function store(Request $request)
    {
        // 1. Validar os dados (importante para não dar erro se faltar imagem ou autor)
        $request->validate([
            'title' => 'required|max:255',
            'writer_id' => 'required|exists:writers,id', // O ID deve vir do <select> que criamos
            'category' => 'required',
            'img' => 'required|image|max:2048',
            'content' => 'required',
        ]);

        $slug = Str::slug($request->title);

        // 2. Garante o slug único
        $count = Article::where('slug', 'LIKE', "{$slug}%")->count();
        if ($count > 0) {
            $slug = $slug . '-' . ($count + 1);
        }

        // 3. Salva usando o writer_id em vez de author
        Article::create([
            'title'      => $request->title,
            'slug'       => $slug,
            'category'   => $request->category,
            'desc'       => $request->desc,
            'content'    => $request->content,
            'writer_id'  => $request->writer_id, // <--- MUDANÇA AQUI
            'img_path'   => $request->file('img')->store('articles', 'public'),
        ]);

        return redirect()->route('admin.articles.index')->with('success', 'Artigo publicado com sucesso!');
    }

    public function destroy(Article $article)
    {
        // 1. Apagar o ficheiro físico da imagem no storage
        if ($article->img_path) {
            Storage::disk('public')->delete($article->img_path);
        }

        // 2. Apagar o registo na base de dados
        $article->delete();

        // 3. Redirecionar com mensagem de sucesso
        return redirect()->route('admin.articles.index')->with('success', 'Artigo removido com sucesso!');
    }

    // Exibe o formulário preenchido
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        $writers = Writer::all();
        return view('admin.articles.edit', compact('article', 'writers'));
    }

    // Grava as alterações
    public function update(Request $request, Article $id)
    {
        $article = Article::findOrFail($id);

        // Validação
        $request->validate([
            'title' => 'required|max:255',
            'writer_id' => 'required|exists:writers,id',
            'category' => 'required',
            'content' => 'required',
            'img' => 'nullable|image|max:2048', // Nullable pois pode não querer mudar a imagem
        ]);

        // Atualizar Slug apenas se o título mudar
        if ($article->title !== $request->title) {
            $slug = Str::slug($request->title);
            $count = Article::where('slug', 'LIKE', "{$slug}%")->where('id', '<>', $id)->count();
            if ($count > 0) {
                $slug = "{$slug}-" . ($count + 1);
            }
            $article->slug = $slug;
        }

        // Atualizar campos
        $article->title = $request->title;
        $article->category = $request->category;
        $article->desc = $request->desc;
        $article->content = $request->content;
        $article->writer_id = $request->writer_id; // Atualiza o autor

        // Se enviou nova imagem, apaga a antiga e salva a nova
        if ($request->hasFile('img')) {
            // Opcional: Storage::disk('public')->delete($article->img_path);
            $article->img_path = $request->file('img')->store('articles', 'public');
        }

        $article->save();

        return redirect()->route('admin.articles.index')->with('success', 'Artigo atualizado com sucesso!');
    }

    // Método para upload de imagens do editor
    public function uploadEditorImage(Request $request)
    {
        // 1. Validar se existe um ficheiro chamado 'upload' (padrão do CKEditor)
        if ($request->hasFile('upload')) {
            
            $request->validate([
                'upload' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120' // Max 5MB
            ]);

            $file = $request->file('upload');
            
            // 2. TRATAR O NOME: Criar um nome único e limpo para SEO
            // Ex: "Manutenção Preventiva.jpg" -> "manutencao-preventiva-168900000.jpg"
            $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            $fileName = Str::slug($originalName) . '-' . time() . '.' . $file->getClientOriginalExtension();

            // 3. GUARDAR: Salvar na pasta public/articles/content
            $path = $file->storeAs('articles/content', $fileName, 'public');
            
            // 4. RESPOSTA: O CKEditor espera um JSON específico com a URL
            $url = asset('storage/' . $path);

            return response()->json([
                'url' => $url
            ]);
        }

        // Caso falhe
        return response()->json(['error' => 'Não foi possível fazer o upload da imagem.'], 400);
    }
}
