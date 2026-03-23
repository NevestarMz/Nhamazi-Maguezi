<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin | Gestão de Equipa</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .bg-nhamazi-blue { background-color: #005daa; }
        .text-nhamazi-blue { color: #005daa; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 antialiased">

    <div class="container mx-auto max-w-6xl py-12 px-4">
        
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6 mb-12">
            <div>
                <h1 class="text-4xl font-black text-[#001a35] tracking-tight uppercase">Equipa de Especialistas</h1>
                <p class="text-slate-400 font-medium mt-1">Gira os perfis que dão voz técnica à NHAMAZI.</p>
            </div>
            <a href="{{ route('admin.writers.create') }}" 
               class="inline-flex items-center justify-center gap-3 bg-nhamazi-blue text-white px-8 py-4 rounded-2xl font-black uppercase tracking-widest shadow-xl shadow-nhamazi-blue/20 hover:bg-[#001a35] hover:-translate-y-1 transition-all duration-300">
                <i class="fas fa-plus"></i> Novo Especialista
            </a>
        </div>

        @if(session('success'))
            <div class="bg-emerald-50 border-l-4 border-emerald-500 text-emerald-700 p-4 rounded-xl mb-8 font-bold text-sm flex items-center gap-3 shadow-sm">
                <i class="fas fa-check-circle"></i> {{ session('success') }}
            </div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse($writers as $writer)
                <div class="bg-white rounded-[2.5rem] border border-slate-100 p-8 shadow-xl shadow-slate-200/50 hover:shadow-2xl hover:shadow-nhamazi-blue/5 transition-all group">
                    <div class="flex items-start justify-between mb-6">
                        <div class="w-20 h-20 rounded-3xl overflow-hidden border-4 border-slate-50 shadow-sm group-hover:scale-105 transition-transform duration-500">
                            <img src="{{ $writer->photo_path ? asset('storage/' . $writer->photo_path) : 'https://ui-avatars.com/api/?name='.urlencode($writer->name).'&background=005daa&color=fff' }}" 
                                 class="w-full h-full object-cover" alt="{{ $writer->name }}">
                        </div>
                        
                        <div class="flex gap-2">
                            <a href="{{ route('admin.writers.edit', $writer->id) }}" class="w-10 h-10 rounded-xl bg-slate-50 text-slate-400 hover:bg-nhamazi-blue hover:text-white flex items-center justify-center transition-all">
                                <i class="fas fa-pen text-xs"></i>
                            </a>
                            <form action="{{ route('admin.writers.destroy', $writer->id) }}" method="POST" onsubmit="return confirm('Tens a certeza? Artigos deste autor ficarão sem assinatura.')">
                                @csrf @method('DELETE')
                                <button type="submit" class="w-10 h-10 rounded-xl bg-slate-50 text-slate-400 hover:bg-red-500 hover:text-white flex items-center justify-center transition-all">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="space-y-1">
                        <h3 class="text-xl font-black text-[#001a35] truncate">{{ $writer->name }}</h3>
                        <p class="text-nhamazi-blue text-xs font-black uppercase tracking-widest">{{ $writer->position }}</p>
                    </div>

                    <div class="mt-6 pt-6 border-t border-slate-50">
                        <p class="text-slate-400 text-xs leading-relaxed line-clamp-2 italic">
                            "{{ $writer->bio ?? 'Sem biografia definida.' }}"
                        </p>
                    </div>

                    <div class="mt-6 flex items-center gap-2">
                        <span class="text-[10px] font-bold text-slate-300 uppercase tracking-widest">Publicações:</span>
                        <span class="bg-slate-100 text-slate-600 px-3 py-1 rounded-full text-[10px] font-black">
                            {{ $writer->articles_count ?? $writer->articles->count() }}
                        </span>
                    </div>
                </div>
            @empty
                <div class="col-span-full py-20 text-center">
                    <div class="w-24 h-24 bg-slate-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="fas fa-users-slash text-3xl text-slate-300"></i>
                    </div>
                    <h2 class="text-xl font-bold text-slate-400">Nenhum especialista cadastrado.</h2>
                    <p class="text-slate-300 text-sm mt-2">Comece por adicionar o primeiro membro da equipa.</p>
                </div>
            @endforelse
        </div>
    </div>

</body>
</html>