<!DOCTYPE html>
<html lang="pt-PT" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insights NHAMAZI | Inteligência em Engenharia Elétrica</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;600;700;800&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <meta name="description" content="O blog oficial da NHAMAZI MAGUÉZI LDA, onde partilhamos insights técnicos, análises de mercado e as últimas tendências em engenharia elétrica.">
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>
    <meta name="apple-mobile-web-app-title" content="NHAMAZI MAGUÊZI LDA" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#005daa',
                        secondary: '#001a35',
                        accent: '#ffc72c',
                        surface: '#f8fafc',
                        border: '#e2e8f0'
                    },
                    fontFamily: {
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        inter: ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>

    <style>
        .bg-teste { background-color: #003b6f; }
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .glass-nav { background: rgba(255, 255, 255, 0.9); backdrop-filter: blur(12px); }
        .post-card { transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275); }
        .post-card:hover { transform: translateY(-8px); }
        .sidebar-sticky { position: sticky; top: 100px; }
        
        #mobile-menu { transform: translateX(100%); transition: transform 0.3s ease-in-out; }
        #mobile-menu.active { transform: translateX(0); }

        .pagination-btn {
            width: 48px;
            height: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            font-weight: 700;
            transition: all 0.2s;
        }
        .pagination-btn:hover:not(:disabled) {
            background-color: #005daa;
            color: white;
            border-color: #005daa;
        }
        .pagination-btn.active {
            background-color: #005daa;
            color: white;
            border-color: #005daa;
        }
        .pagination-btn:disabled {
            opacity: 0.3;
            cursor: not-allowed;
        }
        .m-width { width: 8rem; }
        .m-hieght{ height: 6rem; }
        .width { width: 9rem; }
        .hieght { height: 7rem; }
    </style>
</head>
<body class="bg-surface font-sans text-secondary leading-relaxed">

    <nav class="bg-white sticky backdrop-blur-sm shadow-sm w-full top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-4 md:px-6 py-4 flex justify-between items-center">
            <a href="#inicio" class="flex items-center space-x-3">
                <img src="{{ asset('assets/logo/logo nhamazi.png') }}" class="m-width m-hieght md:m-width md:hieght" alt="NHAMAZI MAGUÉZI LDA">
            </a>
            
            <div class="hidden lg:flex items-center space-x-8 text-[14px] font-extrabold uppercase tracking-widest">
                <a href="{{ route('dashboard') }}" class="text-gray-600  transition-colors rounded-lg px-2 py-1 hover:text-primary">Início</a>
                <a href="{{ route('pages.blog') }}" class="text-primary border-b-2 border-primary">Blog</a>
                <a href="{{ route('dashboard', '#portfolio') }}" class="text-gray-600  transition-colors rounded-lg px-2 py-1  hover:text-primary">Projetos</a>
                <a href="mailto:nhamazimaguezilda@gmail.com?subject=Consultoria" class="bg-primary text-white px-6 py-3 rounded-xl shadow-lg shadow-primary/20 hover:bg-secondary transition-all">Consultoria</a>
            </div>

            <button id="menu-btn" class="lg:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none"><i class="fas fa-bars h-6 w-6 text-2xl"></i></button>
        </div>
    </nav>

    <div id="mobile-menu" class="fixed inset-0 z-[110] bg-secondary p-10 flex flex-col justify-center items-center text-center">
        <button class="absolute top-8 right-8 text-white text-3xl" id="close-btn"><i class="fas fa-times"></i></button>
        <nav class="space-y-8 text-white text-2xl font-black uppercase tracking-widest">
            <a href="#inicio" id="navega" class="text-gray-600 text-2xl md:text-xl hover:text-[#005daa] hover:font-bold transition-colors rounded-lg px-2 py-1">Inicio</a>
            <a href="#servicos" id="navega" class="text-gray-600 text-xl hover:text-[#005daa] transition-colors rounded-lg px-2 py-1">Serviços</a>
            <a href="#planos" id="navega" class="text-gray-600 text-xl hover:text-[#005daa] transition-colors rounded-lg px-2 py-1">Planos</a>
            <a href="{{ route('pages.blog') }}" class="block text-accent">Blog</a>
            <a href="#" class="block">Contacto</a>
        </nav>
    </div>

    <main class="pt-20 lg:pt-20">
        <section class="pb-20 bg-white">
            <div class="container mx-auto px-6">
                <a href="#articles-grid" class="block relative h-[600px] rounded-[3rem] overflow-hidden group shadow-2xl" data-aos="zoom-in">
                    <img src="https://images.unsplash.com/photo-1473341304170-971dccb5ac1e?q=80&w=2070&auto=format&fit=crop" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Energia Solar">
                    <div class="absolute inset-0 gradient-overlay flex flex-col justify-end p-8 md:p-16 bg-gradient-to-t from-black/90 via-black/40 to-transparent">
                        <div class="flex items-center space-x-4 mb-6">
                            <span class="bg-accent text-secondary px-4 py-1 rounded-full text-[10px] font-black uppercase tracking-widest">Destaque</span>
                            <span class="text-white/80 text-xs font-bold uppercase tracking-widest">15 Mar, 2026 • 8 min leitura</span>
                        </div>
                        <h2 class="text-white text-4xl md:text-6xl font-black max-w-4xl leading-[1.1] mb-6 group-hover:text-accent transition-colors">
                            O Futuro da Energia Solar em Moçambique: Oportunidades e Desafios para 2026.
                        </h2>
                        <p class="text-blue-100/80 text-lg max-w-2xl mb-8 line-clamp-2 font-light">
                            Descubra como as novas políticas de incentivo à energia limpa estão transformando o cenário industrial em Maputo e Beira.
                        </p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-4">
                                <img src="https://i.pravatar.cc/150?u=nhamazi" class="w-12 h-12 rounded-full border-2 border-accent" alt="Autor">
                                <div class="text-white">
                                    <p class="text-sm font-bold uppercase">Eng. Pedro Nhamazy Chambisso</p>
                                    <p class="text-[10px] opacity-70 font-black uppercase tracking-widest">Diretor Técnico</p>
                                </div>
                            </div>
                            <span class="hidden md:flex items-center bg-white/10 backdrop-blur-md border border-white/20 text-white px-6 py-3 rounded-full text-xs font-black uppercase tracking-widest group-hover:bg-accent group-hover:text-secondary group-hover:border-accent transition-all">
                                Ler Artigo <i class="fas fa-arrow-right ml-2 group-hover:translate-x-1 transition-transform"></i>
                            </span>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <section class="container mx-auto px-4 md:px-6 pb-24">
            <div class="flex flex-col lg:flex-row gap-12">
                <div class="lg:w-2/3">
                    <div class="flex items-center justify-between mb-12 border-b border-border pb-6">
                        <h2 class="text-2xl font-black uppercase tracking-tighter" id="results-count">Publicações (0)</h2>
                        <div class="flex items-center space-x-4">
                            <select id="filter-category" class="bg-white border border-border text-xs font-bold px-4 py-2 rounded-lg outline-none focus:ring-2 focus:ring-primary/20">
                                <option value="all">Todas as Categorias</option>
                                <option value="Técnico">Técnico</option>
                                <option value="Segurança">Segurança</option>
                                <option value="Domótica">Domótica</option>
                                <option value="Dados">Dados</option>
                            </select>
                        </div>
                    </div>

                    <div id="articles-grid" class="grid sm:grid-cols-2 gap-10">
                    </div>

                    <div id="pagination-container" class="mt-20 flex justify-center items-center space-x-3">
                    </div>
                </div>

                <aside class="lg:w-1/3">
                    <div class="sidebar-sticky space-y-10">
                        <div class="bg-white p-8 rounded-[2rem] border border-border shadow-sm">
                            <h4 class="text-sm font-black uppercase tracking-widest mb-6">Pesquisar Artigo</h4>
                            <div class="relative">
                                <input type="text" id="search-input" class="w-full bg-surface border-none p-4 rounded-2xl outline-none focus:ring-2 focus:ring-primary/20" placeholder="O que procura hoje?">
                                <i class="fas fa-search absolute right-5 top-1/2 -translate-y-1/2 text-primary"></i>
                            </div>
                        </div>

                        <div class="bg-white p-8 rounded-[2rem] border border-border">
                            <h4 class="text-sm font-black uppercase tracking-widest mb-8 border-b border-border pb-4">Tópicos em Tendência</h4>
                            <div class="space-y-6">
                                <a href="#" class="flex items-start space-x-4 group">
                                    <span class="text-3xl font-black text-slate-100 group-hover:text-primary transition-colors">01</span>
                                    <p class="text-sm font-bold group-hover:text-primary transition-all">Como ler o novo contador pré-pago da EDM.</p>
                                </a>
                                <a href="#" class="flex items-start space-x-4 group">
                                    <span class="text-3xl font-black text-slate-100 group-hover:text-primary transition-colors">02</span>
                                    <p class="text-sm font-bold group-hover:text-primary transition-all">Vantagens do sistema On-Grid para fábricas.</p>
                                </a>
                                <a href="#" class="flex items-start space-x-4 group">
                                    <span class="text-3xl font-black text-slate-100 group-hover:text-primary transition-colors">03</span>
                                    <p class="text-sm font-bold group-hover:text-primary transition-all">O que fazer em caso de sobretensão atmosférica?</p>
                                </a>
                            </div>
                        </div>

                        <div class="bg-primary p-10 rounded-[2.5rem] text-white shadow-xl shadow-primary/20 relative overflow-hidden">
                            <h4 class="text-2xl font-black mb-4">Newsletter Técnica</h4>
                            <p class="text-blue-100/60 text-xs mb-8">Receba atualizações semanais sobre engenharia e normas EDM.</p>
                            <input type="email" class="w-full bg-white/10 border-none p-4 rounded-xl mb-4 placeholder-blue-100/40 text-sm focus:ring-1 focus:ring-accent outline-none" placeholder="E-mail profissional">
                            <button class="w-full bg-accent text-secondary font-black py-4 rounded-xl text-xs uppercase tracking-widest">Subscrever</button>
                        </div>

                        <div class="bg-white p-8 rounded-[2rem] border border-border">
                            <h4 class="text-sm font-black uppercase tracking-widest mb-6">Tags Populares</h4>
                            <div class="flex flex-wrap gap-2">
                                <a href="#" class="px-4 py-2 bg-surface rounded-lg text-[10px] font-bold text-slate-500 hover:bg-primary hover:text-white transition-all">#MoçambiqueEnergia</a>
                                <a href="#" class="px-4 py-2 bg-surface rounded-lg text-[10px] font-bold text-slate-500 hover:bg-primary hover:text-white transition-all">#SegurançaElétrica</a>
                                <a href="#" class="px-4 py-2 bg-surface rounded-lg text-[10px] font-bold text-slate-500 hover:bg-primary hover:text-white transition-all">#EDM</a>
                                <a href="#" class="px-4 py-2 bg-surface rounded-lg text-[10px] font-bold text-slate-500 hover:bg-primary hover:text-white transition-all">#SolarSADC</a>
                                <a href="#" class="px-4 py-2 bg-surface rounded-lg text-[10px] font-bold text-slate-500 hover:bg-primary hover:text-white transition-all">#Inovação</a>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    <footer class="bg-teste text-gray-300">
        <div class="container mx-auto px-6 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="mb-6 md:mb-0">
                    <a href="#inicio" class="flex justify-center md:justify-start items-center space-x-2">
                        <img src="{{ asset('assets/logo/logo nhamazi.png') }}" class="w-56 md:w-52 h-32 rounded-3xl md:h-28 object-cover" alt="Logo NHAMAZI MAGUÉZI">
                    </a>
                    <p class="text-gray-400 mt-3">A sua parceira de confiança para projetos elétricos seguros e eficientes.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Links Rápidos</h4>
                    <ul>
                        <li class="mb-2"><a href="{{ route('dashboard', '#servicos') }}" id="navega" class="hover:text-[#ffc72c] transition-colors">Serviços</a></li>
                        <li class="mb-2"><a href="{{ route('dashboard', '#planos') }}" id="navega" class="hover:text-[#ffc72c] transition-colors">Planos</a></li>
                        <li class="mb-2"><a href="{{ route('dashboard', '#portfolio') }}" id="navega" class="hover:text-[#ffc72c] transition-colors">Portfólio</a></li>
                        <li class="mb-2"><a href="{{ route('dashboard', '#sobre') }}" id="navega" class="hover:text-[#ffc72c] transition-colors">Sobre Nós</a></li>
                        <li class="mb-2"><a href="{{ route('pages.blog') }}" id="navega" class="hover:text-[#ffc72c] transition-colors">Blog</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Contacto</h4>
                    <ul>
                        <li class="mb-2 flex items-start">
                            <i class="fas fa-map-marker-alt h-5 w-5 mr-2 mt-1"></i>
                            <address>Maputo, Moçambique</address></li>
                            <li class="mb-2 flex items-start">
                                <a href="tel:+258845335884">
                                    <i class="fas fa-phone-alt h-5 w-5 mr-2 mt-1"></i>
                                    +258 84 533 5884
                                </a>
                            </li>
                        <li class="mb-2 flex items-start">
                            <a href="mailto:nhamazimaguezilda@gmail.com?subject=Contacto&cc=nevestar@nevestar.co.mz">
                                <i class="fas fa-envelope h-5 w-5 mr-2 mt-1"></i>nhamazimaguezilda@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="flex flex-col md:row justify-between items-center border-t border-gray-700 mt-8 pt-6 gap-5 text-blue-100/40 text-sm">
                <p>&copy; <span id="year"></span> NHAMAZI MAGUÉZI LDA. Todos os direitos reservados.</p>
                <div class="flex space-x-6">
                    <a href="https://www.facebook.com/nhamazimaguezi" target="_blank" rel="noopener noreferrer" class="hover:text-white"><i class="fab fa-facebook-f text-lg"></i></a>
                    <a href="https://wa.me/258845335884" target="_blank" rel="noopener noreferrer" class="hover:text-white"><i class="fab fa-whatsapp text-lg"></i></a>
                    <a href="https://www.instagram.com/nhamazimaguezi" target="_blank" rel="noopener noreferrer" class="hover:text-white"><i class="fab fa-instagram text-lg"></i></a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
       // "BANCO DE DADOS" DE ARTIGOS - Agora vindo dinamicamente do Laravel!
        const allArticles = @json($articles);

        let currentPage = 1;
        const itemsPerPage = 4;
        let filteredArticles = [...allArticles];

        const grid = document.getElementById('articles-grid');
        const paginationContainer = document.getElementById('pagination-container');
        const resultsCount = document.getElementById('results-count');
        const searchInput = document.getElementById('search-input');
        const categoryFilter = document.getElementById('filter-category');

        function renderArticles() {
            grid.innerHTML = '';
            const start = (currentPage - 1) * itemsPerPage;
            const end = start + itemsPerPage;
            const pageItems = filteredArticles.slice(start, end);

            resultsCount.innerText = `Publicações (${filteredArticles.length})`;

            if (pageItems.length === 0) {
                grid.innerHTML = '<div class="col-span-full py-20 text-center text-slate-400 font-bold">Nenhum artigo encontrado para esta pesquisa.</div>';
                return;
            }

            pageItems.forEach(art => {
                // A MAGIA ESTÁ AQUI: Adicionei as tags <a> e organizei o rodapé do card
                grid.innerHTML += `
                    <article class="post-card bg-white rounded-[2rem] overflow-hidden shadow-sm border border-border flex flex-col h-full" data-aos="fade-up">
                        <a href="/blog/${art.slug}" class="block h-48 overflow-hidden group">
                            <img src="${art.img}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" alt="${art.title}">
                        </a>
                        <div class="p-6 flex flex-col flex-1">
                            <div class="flex items-center justify-between mb-3">
                                <span class="bg-primary/5 text-primary px-3 py-1 rounded-full text-[9px] font-black uppercase tracking-widest">${art.category}</span>
                                <span class="text-slate-400 text-[10px] font-bold"><i class="far fa-calendar-alt mr-1"></i> ${art.date}</span>
                            </div>
                            
                            <a href="/blog/${art.slug}" class="block group">
                                <h3 class="text-lg font-bold mb-3 leading-tight text-secondary group-hover:text-primary transition-colors">${art.title}</h3>
                            </a>
                            
                            <p class="text-slate-500 text-xs mb-6 line-clamp-2 flex-1">${art.desc}</p>
                            
                            <div class="flex items-center justify-between pt-4 border-t border-border mt-auto">
                                <div class="flex items-center space-x-2">
                                    <div class="w-6 h-6 bg-slate-100 rounded-full flex items-center justify-center text-slate-400 text-[10px]">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <span class="text-[10px] font-bold text-slate-600">${art.author || 'NHAMAZI'}</span>
                                </div>
                                <a href="/blog/${art.slug}" class="text-[10px] font-black uppercase tracking-widest text-primary hover:text-[#001a35] transition-colors group flex items-center">
                                    Ler Artigo <i class="fas fa-arrow-right ml-1 group-hover:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    </article>
                `;
            });
            renderPagination();
        }

        // ... Lógica de Paginação, Filtros e Mobile Menu mantida exatamente igual ...
        function renderPagination() {
            paginationContainer.innerHTML = '';
            const totalPages = Math.ceil(filteredArticles.length / itemsPerPage);

            if (totalPages <= 1) return;

            const prevBtn = document.createElement('button');
            prevBtn.className = 'pagination-btn';
            prevBtn.innerHTML = '<i class="fas fa-chevron-left"></i>';
            prevBtn.disabled = currentPage === 1;
            prevBtn.onclick = () => { currentPage--; renderArticles(); window.scrollTo(0, 500); };
            paginationContainer.appendChild(prevBtn);

            for (let i = 1; i <= totalPages; i++) {
                const btn = document.createElement('button');
                btn.className = `pagination-btn ${i === currentPage ? 'active' : ''}`;
                btn.innerText = i;
                btn.onclick = () => { currentPage = i; renderArticles(); window.scrollTo(0, 500); };
                paginationContainer.appendChild(btn);
            }

            const nextBtn = document.createElement('button');
            nextBtn.className = 'pagination-btn';
            nextBtn.innerHTML = '<i class="fas fa-chevron-right"></i>';
            nextBtn.disabled = currentPage === totalPages;
            nextBtn.onclick = () => { currentPage++; renderArticles(); window.scrollTo(0, 500); };
            paginationContainer.appendChild(nextBtn);
        }

        function applyFilters() {
            const searchTerm = searchInput.value.toLowerCase();
            const category = categoryFilter.value;

            filteredArticles = allArticles.filter(art => {
                const matchesSearch = art.title.toLowerCase().includes(searchTerm) || art.desc.toLowerCase().includes(searchTerm);
                const matchesCategory = category === 'all' || art.category === category;
                return matchesSearch && matchesCategory;
            });

            currentPage = 1; 
            renderArticles();
        }

        searchInput.addEventListener('input', applyFilters);
        categoryFilter.addEventListener('change', applyFilters);

        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
        const mobileMenu = document.getElementById('mobile-menu');

        menuBtn.addEventListener('click', () => mobileMenu.classList.add('active'));
        closeBtn.addEventListener('click', () => mobileMenu.classList.remove('active'));

        window.onload = () => {
            AOS.init({ duration: 800, once: true });
            renderArticles();
        };
    </script>
</body>
</html>