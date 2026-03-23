<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin | Gestão de Artigos</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-slate-50 font-sans text-slate-800">

    <div class="container mx-auto py-12 px-4">
        <div class="flex justify-between items-center mb-8">
            <div>
                <h1 class="text-3xl font-black text-[#005daa] uppercase tracking-tight">Gestão de Artigos</h1>
                <p class="text-slate-500">Administração do Blog NHAMAZI</p>
            </div>
            <a href="{{ route('admin.articles.create') }}" class="bg-[#005daa] text-white px-6 py-3 rounded-xl font-bold shadow-lg shadow-[#005daa]/20 hover:bg-[#001a35] transition-all">
                <i class="fas fa-plus mr-2"></i> Novo Artigo
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-200 text-green-700 px-6 py-4 rounded-xl mb-6">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white rounded-[2rem] shadow-sm border border-slate-100 overflow-hidden">
            <table class="w-full text-left">
                <thead class="bg-slate-50 border-b border-slate-100">
                    <tr>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-slate-400">Capa</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-slate-400">Título</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-slate-400">Categoria</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-slate-400">Data</th>
                        <th class="px-6 py-4 text-xs font-black uppercase tracking-widest text-slate-400 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-50">
                    @forelse($articles as $article)
                    <tr class="hover:bg-slate-50/50 transition-colors">
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/' . $article->img_path) }}" class="w-16 h-10 object-cover rounded-lg shadow-sm">
                        </td>
                        <td class="px-6 py-4 font-bold text-slate-700">{{ $article->title }}</td>
                        <td class="px-6 py-4">
                            <span class="px-3 py-1 bg-blue-50 text-[#005daa] text-[10px] font-black uppercase rounded-full border border-blue-100">
                                {{ $article->category }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-slate-500">{{ $article->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 text-right space-x-2 flex justify-end">
                            <a href="{{ route('admin.articles.edit', $article->id) }}" class="text-slate-400 hover:text-[#005daa] transition-colors">
                                <i class="fas fa-edit"></i>
                            </a>

                            <form action="{{ route('admin.articles.destroy', $article->id) }}" method="POST" onsubmit="return confirm('Tem a certeza que deseja eliminar este artigo?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-slate-400 hover:text-red-600 transition-colors">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-20 text-center text-slate-400">
                            <i class="fas fa-newspaper text-4xl mb-4 block opacity-20"></i>
                            Ainda não publicaste nenhum artigo.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <div class="mt-8 text-center">
            <a href="{{ route('pages.blog') }}" class="text-sm font-bold text-slate-400 hover:text-[#005daa]">
                <i class="fas fa-arrow-left mr-2"></i> Voltar para o Blog Público
            </a>
        </div>
    </div>

</body>
</html>