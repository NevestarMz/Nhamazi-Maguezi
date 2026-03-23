<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin - Novo Artigo</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <style>
        /* Ajuste para o editor não ficar muito pequeno e combinar com o seu design */
        .ck-editor__editable {
            min-height: 400px;
            border-radius: 0 0 1rem 1rem !important;
            background-color: #f8fafc !important; /* slate-50 */
        }
        .ck-toolbar {
            border-radius: 1rem 1rem 0 0 !important;
            border-color: #e2e8f0 !important;
        }
    </style>
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <div class="container mx-auto max-w-5xl py-12 px-4">
        <div class="bg-white rounded-[2.5rem] shadow-2xl p-8 md:p-12 border border-slate-100">
            <div class="flex items-center gap-4 mb-10">
                <div class="w-12 h-12 bg-[#005daa] rounded-2xl flex items-center justify-center text-white shadow-lg shadow-[#005daa]/20">
                    <i class="fas fa-pen-nib"></i>
                </div>
                <h1 class="text-3xl font-black text-[#001a35] uppercase tracking-tight">Publicar Novo Artigo</h1>
            </div>

            <form action="{{ route('admin.articles.store') }}" onsubmit="this.querySelector('button[type=submit]').disabled = true;" method="POST" enctype="multipart/form-data" class="space-y-8">
                @csrf

                <div>
                    <label class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-widest">Título do Artigo</label>
                    <input type="text" name="title" required placeholder="Ex: Manutenção de Transformadores em Tete" 
                           class="w-full bg-slate-50 border border-slate-200 p-4 rounded-xl focus:ring-4 focus:ring-[#005daa]/10 focus:border-[#005daa] outline-none transition-all">
                </div>

                <div class="group">
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 group-focus-within:text-[#005daa]">
                        Especialista Responsável (Autor)
                    </label>
                    <div class="relative">
                        <select name="writer_id" required 
                                class="w-full appearance-none bg-slate-50 border-2 border-slate-50 p-4 rounded-2xl focus:bg-white focus:border-[#005daa]/20 outline-none transition-all font-bold text-slate-600">
                            <option value="" disabled selected>Selecione um membro da equipa...</option>
                            @foreach($writers as $writer)
                                <option value="{{ $writer->id }}">{{ $writer->name }} - {{ $writer->position }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-[#005daa]">
                            <i class="fas fa-chevron-down"></i>
                        </div>
                    </div>
                    <p class="text-[10px] text-slate-400 mt-2 italic font-medium">Gira os perfis e fotos em Admin > Equipa/Escritores.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <label class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-widest">Categoria</label>
                        <select name="category" required class="w-full bg-slate-50 border border-slate-200 p-4 rounded-xl focus:ring-4 focus:ring-[#005daa]/10 outline-none appearance-none">
                            <option value="Engenharia">Engenharia</option>
                            <option value="Segurança Elétrica">Segurança Elétrica</option>
                            <option value="Energias Renováveis">Energias Renováveis</option>
                            <option value="Manutenção Industrial">Manutenção Industrial</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-widest">Imagem de Capa</label>
                        <input type="file" name="img" required class="w-full bg-slate-50 border border-slate-200 p-3 rounded-xl file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-xs file:font-black file:uppercase file:bg-[#005daa] file:text-white hover:file:bg-[#001a35] transition-all">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-widest">Resumo (Card do Blog)</label>
                    <textarea name="desc" rows="2" required class="w-full bg-slate-50 border border-slate-200 p-4 rounded-xl focus:ring-4 focus:ring-[#005daa]/10 outline-none" placeholder="Uma pequena introdução para atrair o leitor..."></textarea>
                </div>

                <div>
                    <label class="block text-sm font-black text-slate-700 mb-2 uppercase tracking-widest">Conteúdo do Artigo</label>
                    <div class="rounded-xl overflow-hidden border border-slate-200">
                        <textarea name="content" id="editor"></textarea>
                    </div>
                    <p class="text-xs text-slate-400 mt-2 font-medium italic">O texto acima será salvo com todas as formatações HTML.</p>
                </div>

                <div class="flex flex-col sm:flex-row justify-end items-center gap-4 pt-8 border-t border-slate-100">
                    <a href="{{ route('admin.articles.index') }}" class="text-sm font-bold text-slate-400 hover:text-red-500 transition-colors">Descartar Rascunho</a>
                    <button type="submit" class="w-full sm:w-auto bg-[#005daa] text-white px-10 py-4 rounded-2xl font-black uppercase tracking-[0.2em] shadow-xl shadow-[#005daa]/20 hover:bg-[#001a35] hover:-translate-y-1 transition-all">
                        Publicar Agora
                    </button>
                </div>
            </form>
        </div>
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