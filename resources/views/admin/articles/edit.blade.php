<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin | Editar Artigo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .ck-editor__editable {
            min-height: 400px;
            border-radius: 0 0 1.5rem 1.5rem !important;
            background-color: #f8fafc !important;
        }
        .ck-toolbar {
            border-radius: 1.5rem 1.5rem 0 0 !important;
            border-color: #e2e8f0 !important;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="container mx-auto max-w-5xl py-12 px-4">
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-400 mb-8">
            <a href="{{ route('admin.articles.index') }}" class="hover:text-primary transition-colors">Artigos</a>
            <i class="fas fa-chevron-right text-[8px]"></i>
            <span class="text-slate-600">Editar Publicação</span>
        </nav>

        <form action="{{ route('admin.articles.update', $article->slug) }}" onsubmit="this.querySelector('button[type=submit]').disabled = true;" method="POST" enctype="multipart/form-data" 
            class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100 p-8 md:p-12 space-y-10">
            @csrf
            @method('PUT')

            <div class="flex items-center justify-between border-b border-slate-50 pb-8">
                <div>
                    <h1 class="text-3xl font-black text-[#001a35] uppercase tracking-tight">Editar Artigo</h1>
                    <p class="text-slate-400 text-sm mt-1 font-medium">Modifique as informações e salve as alterações para atualizar o blog.</p>
                </div>
                <div class="hidden md:block">
                    <span class="bg-[#005daa]/10 text-[#005daa] px-4 py-2 rounded-xl text-[10px] font-black uppercase tracking-widest">
                        ID: #{{ $article->id }}
                    </span>
                </div>
            </div>

            <div class="group">
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-3 group-focus-within:text-primary transition-colors">
                    Título da Publicação
                </label>
                <input type="text" name="title" value="{{ $article->title }}" required 
                    class="w-full bg-slate-50 border-2 border-slate-50 p-5 rounded-2xl focus:bg-white focus:border-primary/20 focus:ring-4 focus:ring-primary/5 outline-none transition-all text-xl font-bold text-slate-700">
            </div>

            <div class="group">
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2">
                    Especialista Responsável
                </label>
                <select name="writer_id" required class="w-full bg-slate-50 border-2 border-slate-50 p-4 rounded-2xl focus:bg-white outline-none font-bold text-slate-600">
                    @foreach($writers as $writer)
                        <option value="{{ $writer->id }}" {{ $article->writer_id == $writer->id ? 'selected' : '' }}>
                            {{ $writer->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                <div class="group">
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-3 group-focus-within:text-primary">
                        Categoria
                    </label>
                    <select name="category" required 
                            class="w-full appearance-none bg-slate-50 border-2 border-slate-50 p-5 rounded-2xl focus:bg-white focus:border-primary/20 outline-none transition-all font-bold text-slate-600 cursor-pointer">
                        <option value="Técnico" {{ $article->category == 'Técnico' ? 'selected' : '' }}>Técnico</option>
                        <option value="Segurança" {{ $article->category == 'Segurança' ? 'selected' : '' }}>Segurança</option>
                        <option value="Domótica" {{ $article->category == 'Domótica' ? 'selected' : '' }}>Domótica</option>
                        <option value="Dados" {{ $article->category == 'Dados' ? 'selected' : '' }}>Dados</option>
                        <option value="Energia" {{ $article->category == 'Energia' ? 'selected' : '' }}>Energia</option>
                    </select>
                </div>

                <div class="group">
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-3">
                        Imagem de Capa
                    </label>
                    <div class="flex items-center gap-6 p-2 bg-slate-50 rounded-2xl border-2 border-dashed border-slate-200 group-hover:border-primary/30 transition-colors">
                        <div class="relative h-20 w-28 shrink-0 overflow-hidden rounded-xl shadow-md border-2 border-white">
                            <img src="{{ asset('storage/' . $article->img_path) }}" class="h-full w-full object-cover" alt="Atual">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                <i class="fas fa-eye text-white text-xs"></i>
                            </div>
                        </div>
                        <div class="flex-1">
                            <input type="file" name="img" 
                                class="block w-full text-xs text-slate-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-[10px] file:font-black file:uppercase file:bg-primary file:text-white hover:file:bg-secondary cursor-pointer transition-all">
                            <p class="text-[10px] text-slate-400 mt-2 font-medium italic">Deixe vazio para manter a imagem atual.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group">
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-3 group-focus-within:text-primary">
                    Resumo (Breve Introdução)
                </label>
                <textarea name="desc" rows="3" required 
                        class="w-full bg-slate-50 border-2 border-slate-50 p-5 rounded-2xl focus:bg-white focus:border-primary/20 outline-none transition-all font-medium text-slate-600 resize-none leading-relaxed">{{ $article->desc }}</textarea>
            </div>

            <div class="group">
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-3">
                    Conteúdo Completo
                </label>
                <div class="rounded-2xl overflow-hidden border border-slate-200 shadow-inner">
                    <textarea name="content" id="editor">{{ $article->content }}</textarea>
                </div>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-10 border-t border-slate-100">
                <a href="{{ route('admin.articles.index') }}" 
                   class="flex items-center gap-2 text-xs font-black uppercase tracking-[0.2em] text-slate-400 hover:text-red-500 transition-colors order-2 md:order-1">
                    <i class="fas fa-arrow-left"></i> Descartar Alterações
                </a>
                
                <button type="submit" 
                        class="w-full md:w-auto bg-blue-500 text-white px-12 py-5 rounded-2xl font-black uppercase tracking-[0.2em] shadow-xl shadow-primary/20 hover:bg-secondary hover:-translate-y-1 transition-all duration-300 order-1 md:order-2 flex items-center justify-center gap-3">
                    Guardar Alterações <i class="fas fa-save text-sm"></i>
                </button>
            </div>
        </form>
    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'), {
                // Adicionar a barra de ferramentas de imagem
                toolbar: {
                    items: [
                        'heading', '|',
                        'bold', 'italic', 'link', 'bulletedList', 'numberedList', '|',
                        'blockQuote', 'insertTable', 'undo', 'redo', '|',
                        'imageUpload' // <--- GARANTIR QUE ISTO ESTÁ AQUI
                    ]
                },
                // CONFIGURAÇÃO DO UPLOAD
                simpleUpload: {
                    // A URL da rota que criámos no Passo 1
                    uploadUrl: "{{ route('admin.admin.articles.upload') }}",
                    // Incluir o Token CSRF necessário pelo Laravel
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                },
                placeholder: 'Comece a escrever o conteúdo técnico aqui...'
            })
            .then(editor => {
                console.log('Editor inicializado com sucesso!', editor);
            })
            .catch(error => {
                console.error('Erro na inicialização:', error);
            });
    </script>
</body> 
</html>