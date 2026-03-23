<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }} | NHAMAZI MAGUÊZI</title>
    
    <meta name="description" content="{{ $article->desc }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $article->title }}">
    <meta property="og:image" content="{{ asset('storage/' . $article->img_path) }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#005daa',    /* Azul Nhamazi */
                        secondary: '#001a35',  /* Azul Escuro */
                        accent: '#ffc72c',     /* Amarelo/Ouro */
                        surface: '#fdfdfe',
                        slate: { 850: '#1e293b' }
                    },
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] }
                }
            }
        }
    </script>

    <style>
        .progress-bar {
            height: 3px;
            background: linear-gradient(to right, #005daa, #ffc72c);
            width: 0%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 100;
        }
        /* Melhoria na leitura do conteúdo */
        .article-body p { margin-bottom: 1.8rem; line-height: 1.9; color: #334155; }
        .article-body h2 { font-weight: 800; font-size: 1.875rem; color: #001a35; margin-top: 3rem; margin-bottom: 1rem; }
        .article-body h3 { font-weight: 700; font-size: 1.5rem; color: #005daa; margin-top: 2rem; margin-bottom: 1rem; }
        .article-body ul { list-style-type: disc; margin-left: 1.5rem; margin-bottom: 1.5rem; color: #334155; }
    </style>
</head>
<body class="bg-[#f8fafc] font-sans text-secondary antialiased">

    <div id="readingProgress" class="progress-bar"></div>

    <nav class="bg-white/80 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100">
        <div class="container mx-auto px-6 h-20 flex items-center justify-between">
            <a href="/" class="font-black text-xl tracking-tighter text-secondary">
                NHAMAZI<span class="text-primary">MAGUÊZI</span>
            </a>
            <a href="{{ route('pages.blog') }}" class="text-xs font-bold uppercase tracking-widest text-slate-500 hover:text-primary transition-colors">
                <i class="fas fa-th-large mr-2"></i> Todos os Artigos
            </a>
        </div>
    </nav>

    <main>
        <header class="bg-secondary pt-16 pb-32">
            <div class="container mx-auto px-4 md:px-6">
                <div class="max-w-4xl mx-auto text-center">
                    <div class="inline-flex items-center gap-2 bg-primary/20 text-accent px-4 py-2 rounded-full text-[10px] font-black uppercase tracking-widest mb-8">
                        <span class="w-2 h-2 bg-accent rounded-full animate-pulse"></span>
                        {{ $article->category }}
                    </div>
                    <h1 class="text-4xl md:text-6xl font-extrabold text-white leading-[1.1] mb-8 tracking-tight">
                        {{ $article->title }}
                    </h1>
                    
                    <div class="flex items-center justify-center gap-8 text-slate-400 text-sm">
                        <div class="flex items-center gap-3 text-left">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode($article->user->name ?? 'NH') }}&background=005daa&color=fff" class="w-10 h-10 rounded-full border border-slate-700">
                            <div>
                                <p class="text-white font-bold">{{ $article->user->name ?? 'Equipa Nhamazi' }}</p>
                                <p class="text-[10px] uppercase tracking-tighter">Autor Principal</p>
                            </div>
                        </div>
                        <div class="h-8 w-px bg-slate-700 hidden sm:block"></div>
                        <div class="flex flex-col items-start hidden sm:flex">
                            <p class="text-white font-bold">{{ \Carbon\Carbon::parse($article->created_at)->translatedFormat('d M, Y') }}</p>
                            <p class="text-[10px] uppercase tracking-tighter">Publicado em</p>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="container mx-auto px-4 md:px-6 -mt-20">
            <div class="max-w-6xl mx-auto flex flex-col lg:flex-row gap-12">
                
                <div class="w-full lg:w-[1080px]">
                    <div class="bg-white rounded-3xl shadow-xl shadow-slate-200/50 overflow-hidden border border-white">
                        <div class="aspect-video w-full overflow-hidden">
                            <img src="{{ asset('storage/' . $article->img_path) }}" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700" alt="{{ $article->title }}">
                        </div>

                        <div class="p-8 md:p-16">
                            <div class="relative mb-12">
                                <i class="fas fa-quote-left absolute -top-4 -left-4 text-slate-100 text-6xl -z-10"></i>
                                <p class="text-xl font-medium text-slate-600 leading-relaxed italic">
                                    {{ $article->desc }}
                                </p>
                            </div>

                            <div class="article-body text-lg">
                                {!! $article->content !!}
                            </div>

                            <div class="mt-16 pt-8 border-t border-slate-100 flex flex-wrap gap-2">
                                <span class="bg-slate-50 text-slate-500 px-4 py-1.5 rounded-lg text-xs font-bold italic">#EngenhariaMoçambique</span>
                                <span class="bg-slate-50 text-slate-500 px-4 py-1.5 rounded-lg text-xs font-bold italic">#EnergiaSustentavel</span>
                            </div>
                        </div>
                    </div>

                    <div class="mt-12 bg-primary rounded-3xl p-8 md:p-12 text-white flex flex-col md:flex-row items-center justify-between gap-8">
                        <div class="max-w-xs">
                            <h3 class="text-2xl font-black mb-2">Gostou deste conteúdo?</h3>
                            <p class="text-white/70 text-sm">Receba as últimas novidades de engenharia diretamente no seu email.</p>
                        </div>
                        <div class="flex w-full md:w-auto gap-2">
                            <input type="email" placeholder="Seu email..." class="bg-white/10 border border-white/20 rounded-xl px-4 py-3 text-sm focus:outline-none focus:ring-2 ring-accent/50 w-full md:w-64">
                            <button class="bg-accent text-secondary px-6 py-3 rounded-xl font-black text-xs uppercase tracking-widest hover:bg-white transition-colors">OK</button>
                        </div>
                    </div>
                </div>

                <aside class="w-full lg:w-1/3 space-y-8">
                    <div class="bg-white rounded-3xl p-8 border border-slate-100 shadow-sm sticky top-32">
                        <div class="w-12 h-12 bg-accent/20 text-secondary rounded-2xl flex items-center justify-center text-xl mb-6">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h4 class="text-xl font-black mb-4">Soluções de Engenharia Personalizadas</h4>
                        <p class="text-slate-500 text-sm leading-relaxed mb-8">Precisa de um projeto elétrico robusto ou manutenção industrial em Moçambique?</p>
                        <a href="mailto:nhamazimaguezilda@gmail.com?subject=Consulta%20de%20Soluções%20de%20Engenharia" class="block w-full text-center bg-secondary text-white py-4 rounded-xl font-black text-xs uppercase tracking-[0.2em] hover:bg-primary transition-all shadow-lg shadow-primary/20">
                            Consultar Agora
                        </a>
                    </div>
                </aside>
            </div>
        </section>

        <section class="bg-white py-24 mt-24">
            <div class="container mx-auto px-4 md:px-6">
                <div class="flex items-end justify-between mb-12">
                    <div>
                        <p class="text-primary font-black text-xs uppercase tracking-widest mb-2">Continuar a ler</p>
                        <h2 class="text-3xl font-black text-secondary">Artigos Sugeridos</h2>
                    </div>
                    <a href="{{ route('pages.blog') }}" class="hidden sm:block text-xs font-bold uppercase border-b-2 border-accent pb-1">Ver todos</a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    @isset($recentArticles)
                        @foreach($recentArticles as $recent)
                        <a href="{{ route('pages.blog-show', $recent->slug) }}" class="group">
                            <div class="aspect-[16/10] rounded-2xl overflow-hidden mb-4">
                                <img src="{{ asset('storage/' . $recent->img_path) }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            </div>
                            <span class="text-[10px] font-black uppercase text-primary tracking-widest">{{ $recent->category }}</span>
                            <h5 class="text-lg font-bold text-secondary mt-2 group-hover:text-primary transition-colors">{{ $recent->title }}</h5>
                        </a>
                        @endforeach
                    @endisset
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-secondary text-white py-12 border-t border-white/5">
        <div class="container mx-auto px-6 text-center">
            <p class="text-slate-500 text-xs">© {{ date('Y') }} NHAMAZI MAGUÊZI, LDA. Todos os direitos reservados.</p>
        </div>
    </footer>

    <script>
        // Barra de progresso subtil
        window.onscroll = function() {
            let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            let scrolled = (winScroll / height) * 100;
            document.getElementById("readingProgress").style.width = scrolled + "%";
        };

        function copyLink() {
            navigator.clipboard.writeText(window.location.href);
            alert('Link copiado para a área de transferência!');
        }

        function share(platform) {
            const url = encodeURIComponent(window.location.href);
            const text = encodeURIComponent("{{ $article->title }}");
            let shareUrl = platform === 'facebook' 
                ? `https://www.facebook.com/sharer/sharer.php?u=${url}`
                : `https://www.linkedin.com/sharing/share-offsite/?url=${url}`;
            window.open(shareUrl, '_blank', 'width=600,height=400');
        }
    </script>
</body>
</html>