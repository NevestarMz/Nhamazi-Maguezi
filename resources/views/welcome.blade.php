<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NHAMAZI MAGUÉZI LDA - Plataforma de Soluções Elétricas</title>
    <meta name="description" content="Plataforma líder em instalações elétricas residenciais, comerciais e industriais. Conectamos tecnologia, segurança e eficiência ao seu projeto.">
    <link rel="icon" type="image/png" href="{{ asset('assets/favicon/favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/favicon/favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('assets/favicon/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('assets/favicon/apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('assets/favicon/site.webmanifest') }}"/>
    <meta name="apple-mobile-web-app-title" content="NHAMAZI MAGUÊZI LDA" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome-free/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Inter', sans-serif;
            @apply text-gray-900 bg-white;
        }
        .primary {
            background-color: #005daa;
        }

        .primary-t {
            color: #005daa;
        }        

        .secondary {
            background-color: #003b6f;
        }

        .secondary-t {
            color: #003b6f;
        }

        .accent {
            background-color: #ffc72c;
        }

        .accent-t {
            color: #ffc72c;
        }
        .hero-bg {
            background-image: linear-gradient(to bottom, rgba(0, 59, 111, 0.9), rgba(0, 59, 111, 0.95)), url('https://images.unsplash.com/photo-1581092921440-4c3038a8e328?q=80&w=2070&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
        .circuit-bg {
             background-color: #ffffff;
             background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100' height='100' viewBox='0 0 100 100'%3E%3Cg fill-rule='evenodd'%3E%3Cg fill='%23e5e7eb' fill-opacity='0.4'%3E%3Cpath opacity='.5' d='M96 95h4v1h-4v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4h-9v4h-1v-4H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15v-9H0v-1h15V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h9V0h1v15h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9h4v1h-4v9zm-1 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm-9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10-10h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm10 0h9v-9h-9v9zm-9-10v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9zm-10 0v-9h-9v9h9z'/%3E%3Cpath d='M6 5V0h1v5h9V0h1v5h9V0h1v5h9V0h1v5h9V0h1v5h9V0h1v5h9V0h1v5h9V0h1v5h9V0h1v5h5v1h-5v9h5v1h-5v9h5v1h-5v9h5v1h-5v9h5v1h-5v9h5v1h-5v9h5v1h-5v9h5v1h-5v9h5v1h-5v5h-1v-5h-9v5h-1v-5h-9v5h-1v-5h-9v5h-1v-5h-9v5h-1v-5h-9v5h-1v-5h-9v5h-1v-5h-9v5h-1v-5h-9v5H5v-1h1V6H5V5z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        .plan-popular {
            position: relative;
        }
        .plan-popular-badge {
            position: absolute;
            top: 0;
            right: 0;
            background-color: #ffc72c;
            color: #003b6f;
            font-weight: bold;
            padding: 0.5rem 1.5rem;
            border-top-right-radius: 0.5rem;
            border-bottom-left-radius: 0.5rem;
        }
        #navega:hover {
            color: #005daa;
        }
        .bg-azul {
            background-color:#005daa;
        }
        .text-azul {
            color: #005daa;
        }
        .text-azul-scuro {
            color: #003b6f;
        }
        .bg-amerel {
            background-color: #ffc72c;
        }
        .hover-bg-amerel:hover {
            background-color: #ffc72c;
        }
        .border-yellow{
            border-color: #ffc72c;
        }
        .bg-teste {
            background-color: #003b6f;
        }
        .service-card {
            @apply flex flex-col items-center text-center p-8 bg-white rounded-xl shadow-lg border border-gray-100 transform transition-transform hover:scale-105;
        }
        .service-icon {
            @apply flex items-center justify-center h-16 w-16 rounded-full bg-azul bg-opacity-10 text-azul mb-5;
        }
        /* New styles for a more polished look */
        .text-gradient {
            background-image: linear-gradient(to right, #005daa, #003b6f);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        #inicio {
            background-image: linear-gradient(to right, rgba(29, 78, 216, 0.85), rgba(29, 78, 216, 0.75), rgba(29, 78, 216, 0.65)), url('../assets/nhami/mostra.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
        .btn-service {
            background-color: rgba(255, 255, 255, 0.1);
            color: hsl(0, 0%, 100%);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        .btn-service:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
        .text-primary-foreground80 {
            color: rgba(255, 255, 255, 0.80);
        }
        .bg-accent {
            background-color: hsl(38, 92%, 50%);
        }
        .text-accent-foreground {
            color: hsl(0, 0%, 100%);
        }
        .m-width {
            width: 8rem;
        }
        .m-hieght{
            height: 6rem;
        }
        .width {
            width: 9rem;
        }
        .hieght {

            height: 7rem;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-900">

    <header id="header" class="bg-white sticky backdrop-blur-sm shadow-sm w-full top-0 z-50 transition-all duration-300">
        <div class="container mx-auto px-6">
            <div class="flex justify-between items-center">
                <a href="#inicio" class="flex items-center space-x-3">
                    <img src="{{ asset('assets/logo/logo nhamazi.png') }}" class="m-width m-hieght md:m-width md:hieght" alt="NHAMAZI MAGUÉZI LDA">
                </a>
                <nav class="hidden lg:flex space-x-6 items-center">
                    <a href="#inicio" id="navega" class="text-gray-600 text-2xl md:text-xl hover:text-[#005daa] hover:font-bold transition-colors rounded-lg px-2 py-1">Inicio</a>
                    <a href="#servicos" id="navega" class="text-gray-600 text-xl hover:text-[#005daa] transition-colors rounded-lg px-2 py-1">Serviços</a>
                    <a href="#planos" id="navega" class="text-gray-600 text-xl hover:text-[#005daa] transition-colors rounded-lg px-2 py-1">Planos</a>
                    <a href="{{ route('pages.blog') }}" target="_blank" rel="noopener noreferrer" id="navega" class="text-gray-600 text-xl hover:text-[#005daa] transition-colors rounded-lg px-2 py-1">Blog</a>
                    <a href="#sobre" id="navega" class="text-gray-600 text-xl hover:text-[#005daa] transition-colors rounded-lg px-2 py-1">Sobre Nós</a>
                    <a href="#contato" class="bg-azul text-white text-xl font-semibold px-5 py-2 rounded-lg hover:bg-[#003b6f] transition-colors">Contacto</a>
                </nav>
                <button id="mobile-menu-button" class="lg:hidden p-2 rounded-md text-gray-600 hover:bg-gray-100 focus:outline-none"><i class="fas fa-bars h-6 w-6 text-2xl"></i></button>
            </div>
        </div>
        <div id="mobile-menu" class="hidden lg:hidden bg-white shadow-lg py-6 z-20 absolute w-full left-0">
            <a href="#inicio"  class="block text-center py-3 px-6 text-xl text-gray-600 hover:bg-gray-50 rounded-lg">Inicio</a>
            <a href="#servicos" class="block text-center py-3 px-6 text-xl text-gray-600 hover:bg-gray-50 rounded-lg">Serviços</a>
            <a href="#planos" class="block text-center py-3 px-6 text-xl text-gray-600 hover:bg-gray-50 rounded-lg">Planos</a>
            <a href="#portfolio" class="block text-center py-3 px-6 text-xl text-gray-600 hover:bg-gray-50 rounded-lg">Portfólio</a>
            <a href="#sobre" class="block text-center py-3 px-6 text-xl text-gray-600 hover:bg-gray-50 rounded-lg">Sobre Nós</a>
            <a href="#contato" class="block text-center py-3 px-6 text-xl text-gray-600 hover:bg-gray-50 rounded-lg">Contacto</a>
        </div>
    </header>

    <main>
        <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-32 pb-24 text-white">
            <div id="inicio" class="absolute inset-0 z-0">
                <div class="absolute inset-0 bg-gradient-to-r from-blue-700/85 via-blue-700/75 to-blue-700/65"></div>
            </div>
            <div class="container relative z-10 px-4 py-20 md:py-32 mx-auto">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-primary-foreground mb-6 animate-fade-in">
                    NHAMAZI MAGUÊZI
                </h1>
                <p class="text-xl md:text-2xl lg:text-3xl text-primary-foreground/90 mb-8 font-light">
                    Soluções em Instalações Elétricas
                </p>
                <p class="text-lg md:text-xl text-primary-foreground80 mb-12 max-w-2xl mx-auto">
                    Soluções completas em instalação residencial e industrial, montagem e manutenção de sistemas elétricos com excelência e segurança.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="#planos" class="bg-accent hover:bg-accent/90 text-accent-foreground font-semibold px-8 py-6 text-lg shadow-lg hover:shadow-xl transition-all rounded-md">
                        Solicite um Orçamento
                        <svg class="inline-block ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                    <a href="#servicos" class="btn-service backdrop-blur-sm px-8 py-6 text-lg rounded-md transition-all">
                        Nossos Serviços
                    </a>
                </div>
            </div>
        </div>
        </section>
        
        <section id="servicos" class="py-16 bg-slate-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-5xl mx-auto mb-20">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Especialidades</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">Soluções Completas para Cada Desafio</p>
                    <div class="h-1.5 w-24 accent mx-auto rounded-full"></div>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <div class="service-card bg-white p-8 rounded-3xl border border-slate-100">
                        <div class="w-16 h-16 bg-blue-600/10 rounded-2xl flex items-center justify-center primary-t text-3xl mb-6">
                            <i class="fas fa-home"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Instalações Residenciais</h3>
                        <p class="text-slate-600 mb-6">Projetos focados no conforto e segurança da sua família. Automação e quadros inteligentes.</p>
                        <ul class="space-y-3 text-sm font-medium text-slate-700">
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Manutenção Geral</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Automação Smart Home</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Proteção Contra Surtos</li>
                        </ul>
                    </div>

                    <div class="service-card secondary p-8 rounded-3xl text-white shadow-xl group">
                        <div class="w-16 h-16 bg-white/10 rounded-2xl flex items-center justify-center accent-t text-3xl mb-6 group-hover:accent group-hover:secondary-t transition-all">
                            <i class="fas fa-building"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Instalações Comerciais</h3>
                        <p class="text-blue-50 mb-6">Infraestrutura elétrica para lojas, escritórios e condomínios que não podem parar.</p>
                        <ul class="space-y-3 text-sm font-medium">
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Redes de Baixa Tensão</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Geradores e UPS</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Auditoria de Carga</li>
                        </ul>
                    </div>

                    <div class="service-card primary p-8 rounded-3xl text-white shadow-blue-200">
                        <div class="w-16 h-16 bg-white/20 rounded-2xl flex items-center justify-center accent-t text-3xl mb-6">
                            <i class="fas fa-solar-panel"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Energia Solar</h3>
                        <p class="text-blue-50 mb-6">Reduza sua fatura em até 90% com sistemas fotovoltaicos inteligentes e sustentáveis.</p>
                        <ul class="space-y-3 text-sm font-medium">
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Instalação On-Grid/Off-Grid</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Dimensionamento</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Backups Críticos</li>
                        </ul>
                    </div>

                    <div class="service-card bg-white p-8 rounded-3xl border border-slate-100">
                        <div class="w-16 h-16 bg-blue-600/10 rounded-2xl flex items-center justify-center primary-t text-3xl mb-6">
                            <i class="fas fa-industry"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-4">Industrial</h3>
                        <p class="text-slate-600 mb-6">Sistemas de força e automação industrial para fábricas em larga escala.</p>
                        <ul class="space-y-3 text-sm font-medium text-slate-700">
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Subestações</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Quadros de Média Tensão</li>
                            <li><i class="fas fa-check-circle accent-t mr-2"></i> Laudos NR10</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicos" class="py-20 circuit-bg">
            <div class="container mx-auto px-6">
               <div class="text-center max-w-5xl mx-auto mb-20">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Um Ecossistema Completo de Serviços Elétricos</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">Desde a mais simples Reparação até ao mais Complexo Projeto industrial.</p>
                    <div class="h-1.5 w-24 bg-red-500 mx-auto rounded-full"></div>
                </div>
                <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-x-12 gap-y-8">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-plug"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Instalação e Manutenção Elétrica Residencial</h4>
                            <p class="text-gray-600">Garanta o bom funcionamento e a segurança da sua casa.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-industry"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Instalação e Manutenção Elétrica Comercial</h4>
                            <p class="text-gray-600">Soluções robustas para o seu negócio.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-cogs"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Manutenção de Equipamentos Elétricos</h4>
                            <p class="text-gray-600">Maximize a vida útil e a performance dos seus aparelhos.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Instalação de Tomadas, Interruptores e Quadros</h4>
                            <p class="text-gray-600">Instalação profissional e segura.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-tower-broadcast"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Reparação de Linhas Aéreas e Subterrâneas</h4>
                            <p class="text-gray-600">Serviço especializado para redes elétricas complexas.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-box-open"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Montagem de Quadros Elétricos</h4>
                            <p class="text-gray-600">Quadros elétricos de alta qualidade e segurança.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-drafting-compass"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Projetos Elétricos e Canalização</h4>
                            <p class="text-gray-600">Planeamento completo para novas construções.</p>
                        </div>
                    </div>
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-8 w-8 flex items-center justify-center rounded-full bg-amerel text-azul-scuro mr-4 shadow-md">
                            <i class="fas fa-bolt"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-lg text-gray-900">Modernização de Sistemas Elétricos</h4>
                            <p class="text-gray-600">Atualize sua instalação para maior eficiência e segurança.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="planos" class="py-10 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-5xl mx-auto mb-20">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Planos da NHAMAZI MAGUÊZI, LDA</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">Planos Estratégicos para o Seu Investimento</p>
                    <div class="h-1.5 w-24 bg-blue-500 mx-auto rounded-full"></div>
                </div>

                <div class="grid lg:grid-cols-3 gap-8 max-w-6xl mx-auto items-start">
                    <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 flex flex-col h-full transform transition-transform hover:scale-105"> 
                        <h3 class="text-2xl font-bold text-center text-gray-900 mb-2">Manutenção Essencial</h3> 
                        <p class="text-center text-gray-600 mb-6">Para residências e pequenos negócios.</p> 
                        <ul class="space-y-4 text-gray-600 mb-8 flex-grow"> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Manutenção elétrica residencial</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Instalação de tomadas e interruptores</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Manutenção de equipamentos</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Assistência técnica e suporte</li> 
                        </ul> 
                        <a href="mailto:nhamazimaguezilda@gmail.com?subject=Solicitação%20de%20Orçamento&cc=nevestar@nevestar.co.mz" class="mt-auto w-full text-center bg-gray-200 text-gray-800 font-semibold py-3 rounded-lg hover:bg-gray-300 transition-colors">Solicitar Orçamento</a> 
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-xl plan-popular border-2 border-yellow flex flex-col h-full transform transition-transform hover:scale-105"> 
                        <span class="plan-popular-badge text-sm">Mais Popular</span> 
                        <h3 class="text-2xl font-bold text-center text-azul mb-2 mt-2">Projetos & Instalação</h3> 
                        <p class="text-center text-gray-600 mb-6">Solução completa para empresas e residências.</p> 
                        <ul class="space-y-4 text-gray-600 mb-8 flex-grow"> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Todos os serviços de Manutenção</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Projetos elétricos e canalização</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Montagem de quadros elétricos</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Modernização do sistema elétrico</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Suporte prioritário</li> 
                        </ul> 
                        <a href="mailto:nhamazimaguezilda@gmail.com?subject=Solicitação%20de%20Orçamento&cc=nevestar@nevestar.co.mz" class="mt-auto w-full text-center bg-azul text-white font-semibold py-3 rounded-lg hover:bg-blue-900 transition-colors shadow-lg">Solicitar Orçamento</a> 
                    </div>
                    <div class="bg-white p-8 rounded-xl shadow-lg border border-gray-100 flex flex-col h-full transform transition-transform hover:scale-105"> 
                        <h3 class="text-2xl font-bold text-center text-gray-900 mb-2">Industrial & Comercial</h3> 
                        <p class="text-center text-gray-600 mb-6">Para projetos de grande escala e indústria.</p> 
                        <ul class="space-y-4 text-gray-600 mb-8 flex-grow"> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Todos os serviços de Projetos</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Manutenção elétrica comercial</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Reparação de linhas aéreas/subterrâneas</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Consultoria e adequação a normas</li> 
                            <li class="flex items-start"><i class="fas fa-check h-5 w-5 text-green-500 mr-2 flex-shrink-0 mt-1"></i>Suporte dedicado 24/7</li> 
                        </ul> 
                        <a href="mailto:nhamazimaguezilda@gmail.com?subject=Solicitação%20de%20Orçamento&cc=nevestar@nevestar.co.mz" class="mt-auto w-full text-center bg-gray-200 text-gray-800 font-semibold py-3 rounded-lg hover:bg-gray-300 transition-colors">Solicitar Orçamento</a> 
                    </div>
                </div>
            </div>
        </section>

        <section id="portfolio" class="py-16 circuit-bg">
            <div class="container mx-auto">
                <div class="text-center max-w-5xl mx-auto mb-16">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Projetos que Energizam o Futuro</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">A prova da nossa qualidade está no trabalho que entregamos.</p>
                    <div class="h-1.5 w-24 accent mx-auto rounded-full"></div>
                </div>
                <div class="relative max-w-7xl mx-auto px-4 md:px-6">
                    <div class="flex overflow-hidden relative rounded-xl shadow-xl">
                        <div id="carousel-track" class="flex transition-transform duration-500 ease-in-out">
                            <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
                                <div class="group relative overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/nhami/intala.jpg') }}" alt="Instalação Residencial" class="w-full h-96 object-cover transform transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex flex-col justify-end p-6 opacity-100 transition-opacity duration-300">
                                        <h3 class="accent-t font-bold text-sm mb-2 uppercase">Instalação Residencial</h3>
                                        <span class="text-white text-2xl font-bold">Alta Performance</span>
                                    </div>
                                </div>
                            </div>
                             <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
                                <div class="group relative overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/nhami/Quadro.jpg') }}" alt="Montagem de Quadro" class="w-full h-96 object-cover transform transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex flex-col justify-end p-6 opacity-100 transition-opacity duration-300">
                                        <h3 class="accent-t font-bold text-sm mb-2 uppercase">Montagem de Quadro</h3>
                                        <span class="text-white text-2xl font-bold">Organização e Segurança</span>
                                    </div>
                                </div>
                            </div>
                             <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
                                <div class="group relative overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/nhami/Quadro.jpg') }}" alt="Montagem de Quadro" class="w-full h-96 object-cover transform transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex flex-col justify-end p-6 opacity-100 transition-opacity duration-300">
                                        <h3 class="accent-t font-bold text-sm mb-2 uppercase">Montagem de Quadro</h3>
                                        <span class="text-white text-2xl font-bold">Organização e Segurança</span>
                                    </div>
                                </div>
                            </div>
                             <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 p-4">
                                <div class="group relative overflow-hidden rounded-lg">
                                    <img src="{{ asset('assets/nhami/Cablagem.jpg') }}" alt="Organização de Cablagem" class="w-full h-96 object-cover transform transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-gray-900/70 to-transparent flex flex-col justify-end p-6 opacity-100 transition-opacity duration-300">
                                        <h3 class="accent-t font-bold text-sm mb-2 uppercase">Organização de Cablagem</h3>
                                        <span class="text-white text-2xl font-bold">Normas Técnicas</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="prev-button" class="absolute top-1/2 left-0 z-10 -translate-y-1/2 bg-white backdrop-blur-sm p-3 rounded-full shadow-lg hover-bg-amerel transition-colors"><i class="fas fa-arrow-left h-6 w-6 text-azul-scuro"></i></button>
                    <button id="next-button" class="absolute top-1/2 right-0 z-10 -translate-y-1/2 bg-white backdrop-blur-sm p-3 rounded-full shadow-lg hover-bg-amerel transition-colors"><i class="fas fa-arrow-right h-6 w-6 text-azul-scuro"></i></button>
                </div>
            </div>
        </section>

        <section id="sobre" class="pt-10 pb-20 bg-gray-50">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row items-center gap-12">
                    <div class="md:w-1/2">
                        <img src="{{ asset('assets/nhami/mostra.jpg') }}" class="w-full h-full rounded-lg object-cover transform transition-transform duration-500 group-hover:scale-110" alt="Nossa História">
                    </div>
                    <div class="md:w-1/2">
                        <h2 class="text-4xl font-extrabold secondary-t mb-6">A Nossa Missão: Qualidade e Confiança em Cada Conexão</h2>
                        <p class="text-gray-600 mb-4">A NHAMAZI MAGUÉZI LDA nasceu da paixão por engenharia elétrica e do compromisso em oferecer serviços de alta qualidade. Com uma equipa de profissionais certificados e experientes, a nossa missão é entregar soluções elétricas seguras, eficientes e inovadoras.</p>
                        <p class="text-gray-600 mb-6">Valorizamos a confiança dos nossos clientes e trabalhamos com transparência, utilizando materiais de primeira linha e seguindo rigorosamente todas as normas técnicas para garantir a máxima segurança em cada projeto.</p>
                        <a href="mailto:nhamazimaguezilda@gmail.com?subject=Em%20Contacto%20com%20Especialista&cc=nevestar@nevestar.co.mz" class="text-azul font-semibold hover:underline flex items-center group">Fale com um especialista <i class="fas fa-arrow-right h-5 w-5 ml-2 transition-transform group-hover:translate-x-1"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- ESTATÍSTICAS -->
        <section class="bg-blue-100 py-16">
            <div class="container mx-auto grid md:grid-cols-4 text-center">
            <div class="fade-in">
                <div class="text-4xl font-bold" data-target="150">0</div>
                <p>Projetos Concluídos</p>
            </div>
            <div class="fade-in">
                <div class="text-4xl font-bold" data-target="100">0</div>
                <p>Clientes Satisfeitos</p>
            </div>
            <div class="fade-in">
                <div class="text-4xl font-bold" data-target="50">0</div>
                <p>Especialistas</p>
            </div>
            <div class="fade-in">
                <div class="text-4xl font-bold" data-target="20">0</div>
                <p>Anos de Experiência</p>
            </div>
            </div>
        </section>

        <section id="banners" class="py-20">
            <div class="container mx-auto px-6">
                 <div class="text-center max-w-5xl mx-auto mb-16">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Porque Escolher a NHAMAZI MAGUÊZI LDA?</h2>
                    <div class="h-1.5 w-24 accent mx-auto rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto text-center">
                    <div class="flex flex-col items-center text-center p-8 bg-white rounded-xl shadow-lg border border-gray-100 transform transition-transform hover:scale-105">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-500 bg-opacity-10 text-azul mb-5"><i class="fas fa-award h-8 w-8 text-3xl"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Qualidade Certificada</h3>
                        <p class="text-gray-600">Utilizamos apenas materiais de ponta e seguimos as normas mais rigorosas para garantir a longevidade e performance do seu sistema.</p>
                    </div>
                     <div class="flex flex-col items-center text-center p-8 bg-white rounded-xl shadow-lg border border-gray-100 transform transition-transform hover:scale-105">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-500 bg-opacity-10 text-azul mb-5"><i class="fas fa-shield-alt h-8 w-8 text-3xl"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Segurança Inegociável</h3>
                        <p class="text-gray-600">Cada projeto é executado com um foco obsessivo na segurança, protegendo o seu património e, mais importante, as pessoas.</p>
                    </div>
                     <div class="flex flex-col items-center text-center p-8 bg-white rounded-xl shadow-lg border border-gray-100 transform transition-transform hover:scale-105">
                        <div class="flex items-center justify-center h-16 w-16 rounded-full bg-blue-500 bg-opacity-10 text-azul mb-5"><i class="fas fa-chart-line h-8 w-8 text-3xl"></i></div>
                        <h3 class="text-xl font-bold text-gray-900 mb-2">Eficiência Energética</h3>
                        <p class="text-gray-600">Desenvolvemos soluções que otimizam o consumo de energia, gerando economia e sustentabilidade para o seu futuro.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Seção Depoimentos ===== -->
        <section id="depoimentos" class="py-16">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-3xl mx-auto mb-16">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">A Voz da Experiência: Depoimentos de Clientes Satisfeitos</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">A satisfação dos nossos clientes é o nosso maior orgulho.</p>
                    <div class="h-1.5 w-24 accent mx-auto rounded-full"></div>
                </div>
                <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                    <div class="bg-white p-8 rounded-lg border border-gray-200">
                        <p class="text-gray-600 mb-6 italic">"Serviço impecável! A equipa foi extremamente profissional e atenciosa do início ao fim do projeto da nossa nova house. Recomendo fortemente!"</p>
                        <div class="flex items-center">
                            <img src="{{ asset('assets/nhami/chambisso.jpg') }}" class="rounded-full w-16 h-16" alt="Cliente João Ribeiro">
                            <div class="px-3">
                                <p class="font-bold text-gray-800">João Ribeiro</p>
                                <p class="text-sm text-gray-500">Cliente Residencial</p>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-8 rounded-lg border border-gray-200">
                        <p class="text-gray-600 mb-6 italic">"Contratamos a NHAMAZI para a reestruturação elétrica da nossa empresa. O projeto foi entregue no prazo e superou as nossas expectativas em organização e eficiência."</p>
                        <div class="flex items-center">
                            <img src="{{ asset('assets/nhami/bie.jpg') }}" class="rounded-full w-16 h-16" alt="Cliente Ana Silva">
                            <div class="px-3">
                                <p class="font-bold text-gray-800">Ana Silva</p>
                                <p class="text-sm text-gray-500">Gerente de Operações</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===== Seção FAQ ===== -->
        <section id="faq" class="py-16 bg-white">
            <div class="container mx-auto px-6">
               <div class="text-center max-w-5xl mx-auto mb-16">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Dúvidas Comuns: Respostas Rápidas</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">Tire as suas dúvidas sobre os nossos serviços. Se não encontrar o que procura, entre em contacto connosco.</p>
                    <div class="h-1.5 w-24 accent mx-auto rounded-full"></div>
                </div>
                <div class="max-w-5xl mx-auto bg-white p-6 border-2 rounded-lg shadow-md">
                    <div class="border-b faq-item">
                        <div class="faq-question flex justify-between items-center py-4">
                            <h4 class="text-lg font-medium font-bold primary-t">Vocês atendem a pequenas reparações?</h4>
                            <i data-feather="chevron-down" class="transition-transform"></i>
                        </div>
                        <div class="faq-answer pb-4 text-gray-600">
                            <p>Sim, atendemos desde pequenas reparações e manutenções residenciais até grandes projetos industriais. Nenhum trabalho é pequeno demais para a nossa equipa.</p>
                        </div>
                    </div>
                    <div class="border-b faq-item">
                        <div class="faq-question flex justify-between items-center py-4">
                            <h4 class="text-lg font-medium font-bold primary-t">Como posso solicitar um orçamento?</h4>
                            <i data-feather="chevron-down" class="transition-transform"></i>
                        </div>
                        <div class="faq-answer pb-4 text-gray-600">
                            <p>Pode solicitar um orçamento sem compromisso preenchendo o formulário na nossa secção de <a href="#contato" class="text-blue-600 hover:underline">Contacto</a>, ou ligando diretamente para nós. Teremos todo o prazer em analisar o seu projeto.</p>
                        </div>
                    </div>
                    <div class="border-b faq-item">
                        <div class="faq-question flex justify-between items-center py-4">
                            <h4 class="text-lg font-medium font-bold primary-t">Os serviços possuem garantia?</h4>
                            <i data-feather="chevron-down" class="transition-transform"></i>
                        </div>
                        <div class="faq-answer pb-4 text-gray-600">
                            <p>Sim, todos os nossos serviços e instalações possuem garantia. Acreditamos na qualidade do nosso trabalho e oferecemos total suporte pós-serviço para garantir a sua tranquilidade.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-teste">
            <div class="container mx-auto px-6 py-16 text-center text-white">
                <h2 class="text-3xl font-bold mb-3">Tem um Projeto em Mente? Vamos Iluminá-lo.</h2>
                <p class="opacity-80 mb-8 max-w-2xl mx-auto">Não adie a segurança e a eficiência do seu sistema elétrico. Contacte os nossos especialistas hoje e dê o primeiro passo.</p>
                <a href="#contato" class="bg-amerel text-azul-scuro font-bold px-8 py-4 rounded-lg hover:opacity-90 transition-colors shadow-lg">Solicitar Orçamento Gratuito</a>
            </div>
        </section>

        <section id="contato" class="py-20 bg-white">
            <div class="container mx-auto px-6">
                <div class="text-center max-w-5xl mx-auto mb-20">
                    <h2 class="primary-t font-bold tracking-widest uppercase text-2xl mb-4">Inicie o Seu Projeto Hoje Mesmo</h2>
                    <p class="text-4xl font-extrabold secondary-t mb-4">Preencha o formulário abaixo. Estamos prontos para responder e fornecer um orçamento detalhado.</p>
                    <div class="h-1.5 w-24 accent mx-auto rounded-full"></div>
                </div>
                <div class="max-w-4xl mx-auto bg-gray-50 rounded-xl shadow-2xl p-8 md:p-12">
                    <form action="#" method="POST">
                        <div class="grid md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <label for="name" class="block mb-2 font-medium">Nome</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i class="fas fa-user text-gray-400"></i>
                                    </div>
                                    <input type="text" id="name" placeholder="Digite seu Nome Completo" name="name" class="w-full pl-9 pr-2 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#005daa]" required>
                                </div>
                                
                            </div>
                            <div>
                                <label for="email" class="block mb-2 font-medium">Email</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                        <i class="fas fa-envelope text-gray-400"></i>
                                    </div>
                                    <input type="email" id="email" placeholder="Digite o seu E-mail" name="email" class="w-full pl-9 pr-2 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#005daa]" required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="subject" class="block mb-2 font-medium">Assunto</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <i class="fas fa-tag text-gray-400"></i>
                                </div>
                                <input type="text" id="subject" placeholder="Assunto da Mensagem" name="subject" class="w-full pl-9 pr-2 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#005daa]" required>
                            </div>
                        </div>
                        <div class="mb-6">
                            <label for="message" class="block mb-2 font-medium">Mensagem / Descreva o Projeto</label>
                            <textarea id="message" name="message" placeholder="Como podemos ajudar?" rows="5" class="w-full px-4 py-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#005daa]" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="bg-azul text-white font-semibold px-10 py-3 rounded-lg hover:bg-[#003b6f] transition-colors w-full md:w-auto shadow-md">Enviar Mensagem</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer class="bg-teste text-gray-300">
        <div class="container mx-auto px-6 py-12">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="mb-6 md:mb-0">
                    <!-- Logo -->
                    <a href="#inicio" class="flex justify-center md:justify-start items-center space-x-2">
                        <img src="{{ asset('assets/logo/logo nhamazi.png') }}" class="w-56 md:w-52 h-32 rounded-3xl md:h-28 object-cover" alt="Logo NHAMAZI MAGUÉZI">
                    </a>
                    <p class="text-gray-400 mt-3">A sua parceira de confiança para projetos elétricos seguros e eficientes.</p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Links Rápidos</h4>
                    <ul>
                        <li class="mb-2"><a href="#servicos" id="navega" class="hover:text-[#ffc72c] transition-colors">Serviços</a></li>
                        <li class="mb-2"><a href="#planos" id="navega" class="hover:text-[#ffc72c] transition-colors">Planos</a></li>
                        <li class="mb-2"><a href="#portfolio" id="navega" class="hover:text-[#ffc72c] transition-colors">Portfólio</a></li>
                        <li class="mb-2"><a href="#sobre" id="navega" class="hover:text-[#ffc72c] transition-colors">Sobre Nós</a></li>
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
            <!-- <div class="border-t border-gray-700 mt-8 pt-6 text-center text-gray-400">
                <p>&copy; <span id="year"></span> NHAMAZI MAGUÉZI LDA. Todos os direitos reservados.</p>
            </div> -->
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

    <div id="chat-container" class="fixed bottom-5 right-5 z-50">
        <button id="chat-button" class="bg-azul text-white h-16 w-16 rounded-full shadow-lg flex items-center justify-center hover:bg-[#003b6f] transition-colors"> 
            <i class="fas fa-headset h-8 w-8 text-3xl"></i> 
        </button>
        <div id="chat-window" class="hidden absolute bottom-20 right-0 w-80 bg-white rounded-lg shadow-2xl border border-gray-200 opacity-0 transform translate-y-4 transition-all duration-300">
            <div class="flex justify-between items-center p-4 bg-teste text-white rounded-t-lg"> 
                <h3 class="font-bold">Assistente Virtual <strong>NhamaziChat</strong></h3> 
                <button id="close-chat-button" class="p-1 hover:bg-[#003b6f] rounded-full text-lg font-bold">&times;</button> 
            </div>
            <div id="chat-messages" class="p-4 h-80 overflow-y-auto space-y-4"> 
                <div class="flex"> 
                    <div class="bg-gray-200 text-gray-800 p-3 rounded-lg max-w-xs"> 
                        <p>Olá! Estás na plataforma NhamaziChat. Como posso ajudar hoje?</p> 
                    </div> 
                </div> 
            </div>
            <div class="p-4 border-t flex"> 
                <input id="chat-input" type="text" placeholder="Digite a sua mensagem..." class="w-full px-3 py-2 border rounded-l-md focus:outline-none focus:ring-2 focus:ring-[#005daa]"> 
                <button id="send-chat-button" class="bg-teste text-white px-4 rounded-r-md hover:bg-[#003b6f]">
                    <i class="fas fa-paper-plane h-5 w-5 text-xl"></i>
                </button> 
            </div>
        </div>
    </div>

    <script>
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        mobileMenuButton.addEventListener('click', () => { mobileMenu.classList.toggle('hidden'); });
        document.querySelectorAll('#mobile-menu a, #header a').forEach(link => {
            link.addEventListener('click', (e) => {
                if (link.hash !== "") {
                    const targetElement = document.querySelector(link.hash);
                    if (targetElement) { e.preventDefault(); targetElement.scrollIntoView({ behavior: 'smooth' }); }
                }
                if (!mobileMenu.classList.contains('hidden')) { mobileMenu.classList.add('hidden'); }
            });
        });

        document.getElementById('year').textContent = new Date().getFullYear();

        const header = document.getElementById('header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) { header.classList.add('py-2', 'shadow-md'); header.classList.remove('py-3', 'shadow-sm'); } 
            else { header.classList.remove('py-2', 'shadow-md'); header.classList.add('py-3', 'shadow-sm'); }
        });

        // Lógica do Carousel Dinâmico
        const carouselTrack = document.getElementById('carousel-track');
        const slides = Array.from(carouselTrack.children);
        const nextButton = document.getElementById('next-button');
        const prevButton = document.getElementById('prev-button');
        let currentIndex = 0;
        let visibleSlides = 1;
        let autoplayInterval;

        const updateVisibleSlides = () => {
            const width = window.innerWidth;
            if (width >= 1024) visibleSlides = 3;
            else if (width >= 768) visibleSlides = 2;
            else visibleSlides = 1;
            updateCarouselPosition();
        };

        const updateCarouselPosition = () => {
            if (slides.length > 0) {
                const slideWidth = slides[0].getBoundingClientRect().width;
                carouselTrack.style.transform = `translateX(-${slideWidth * currentIndex}px)`;
            }
        };

        const moveToSlide = (direction) => {
            let newIndex = currentIndex + direction;
            const maxIndex = slides.length - visibleSlides;

            if (newIndex > maxIndex) newIndex = 0;
            if (newIndex < 0) newIndex = maxIndex;

            currentIndex = newIndex;
            updateCarouselPosition();
        };

        const startAutoplay = () => {
            stopAutoplay();
            autoplayInterval = setInterval(() => moveToSlide(1), 4000);
        };

        const stopAutoplay = () => {
            clearInterval(autoplayInterval);
        };

        nextButton.addEventListener('click', () => {
            moveToSlide(1);
            stopAutoplay();
            startAutoplay();
        });
        prevButton.addEventListener('click', () => {
            moveToSlide(-1);
            stopAutoplay();
            startAutoplay();
        });

        window.addEventListener('resize', () => {
            updateVisibleSlides();
        });

        document.addEventListener('DOMContentLoaded', () => {
            updateVisibleSlides();
            startAutoplay();
        });
        
        // Lógica do Chat
        const chatButton = document.getElementById('chat-button');
        const chatWindow = document.getElementById('chat-window');
        const closeChatButton = document.getElementById('close-chat-button');
        const sendChatButton = document.getElementById('send-chat-button');
        const chatInput = document.getElementById('chat-input');
        const chatMessages = document.getElementById('chat-messages');

        chatButton.addEventListener('click', () => {
            chatWindow.classList.toggle('hidden');
            setTimeout(() => { chatWindow.classList.toggle('opacity-0'); chatWindow.classList.toggle('translate-y-4'); }, 10);
        });

        closeChatButton.addEventListener('click', () => {
            chatWindow.classList.toggle('opacity-0');
            chatWindow.classList.toggle('translate-y-4');
            setTimeout(() => { chatWindow.classList.toggle('hidden'); }, 300);
        });

        function addMessage(message, sender = 'user') {
            const messageDiv = document.createElement('div');
            messageDiv.classList.add('flex', 'max-w-full');
            if (sender === 'user') {
                messageDiv.classList.add('justify-end');
                messageDiv.innerHTML = `<div class="bg-azul text-white p-3 rounded-lg max-w-xs shadow-md"><p>${message}</p></div>`;
            } else {
                messageDiv.innerHTML = `<div class="bg-gray-200 text-gray-800 p-3 rounded-lg max-w-xs shadow-md"><p>${message}</p></div>`;
            }
            chatMessages.appendChild(messageDiv);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function handleSendMessage() {
            const message = chatInput.value.trim();
            if (message) {
                addMessage(message, 'user');
                chatInput.value = '';
                setTimeout(() => { addMessage('Obrigado pela sua mensagem! Um dos nossos especialistas entrará em contacto em breve.', 'bot'); }, 1000);
            }
        }

        sendChatButton.addEventListener('click', handleSendMessage);
        chatInput.addEventListener('keypress', (e) => { if (e.key === 'Enter') handleSendMessage(); });

        // Contador animado
        const counters = document.querySelectorAll('[data-target]');
        const speed = 200; // ajuste da velocidade
        const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
            const updateCount = (el, target) => {
                const count = +el.innerText;
                const inc = Math.ceil(target / speed);
                if(count < target) {
                el.innerText = count + inc;
                setTimeout(() => updateCount(el, target), 20);
                } else {
                el.innerText = target;
                }
            }
            counters.forEach(counter => {
                updateCount(counter, +counter.getAttribute('data-target'));
            });
            observer.disconnect();
            }
        });
        }, {threshold: 0.5});
        counters.forEach(counter => observer.observe(counter));
    </script>
</body>
</html>
