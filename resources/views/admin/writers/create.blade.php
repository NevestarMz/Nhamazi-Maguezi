<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin | Novo Especialista</title>
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

    <div class="container mx-auto max-w-4xl py-12 px-4">
        <nav class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-slate-400 mb-8">
            <a href="{{ route('admin.writers.index') }}" class="hover:text-nhamazi-blue transition-colors">Equipa</a>
            <i class="fas fa-chevron-right text-[8px]"></i>
            <span class="text-slate-600">Adicionar Especialista</span>
        </nav>

        <form action="{{ route('admin.writers.store') }}" method="POST" enctype="multipart/form-data" 
            class="bg-white rounded-[2.5rem] shadow-2xl shadow-slate-200/60 border border-slate-100 p-8 md:p-12 space-y-10">
            @csrf

            <div class="border-b border-slate-50 pb-8">
                <h1 class="text-3xl font-black text-[#001a35] uppercase tracking-tight">Novo Perfil de Escritor</h1>
                <p class="text-slate-400 text-sm mt-1 font-medium">Cadastre os membros da equipa que assinarão os artigos técnicos.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                
                <div class="space-y-4">
                    <label class="block text-xs font-black uppercase tracking-widest text-slate-400">Foto de Perfil</label>
                    <div class="relative group w-full aspect-square bg-slate-100 rounded-[2rem] overflow-hidden border-4 border-white shadow-lg flex items-center justify-center">
                        <i id="placeholder-icon" class="fas fa-user-tie text-4xl text-slate-300"></i>
                        <img id="preview" class="hidden absolute inset-0 w-full h-full object-cover">
                        
                        <div class="absolute inset-0 bg-nhamazi-blue/80 opacity-0 group-hover:opacity-100 transition-opacity flex flex-col items-center justify-center text-white p-4 text-center">
                            <i class="fas fa-camera text-xl mb-2"></i>
                            <span class="text-[10px] font-black uppercase tracking-widest">Alterar Foto</span>
                        </div>
                        <input type="file" name="photo" id="photo-input" required class="absolute inset-0 opacity-0 cursor-pointer" onchange="previewImage(event)">
                    </div>
                    <p class="text-[10px] text-center text-slate-400 font-medium italic leading-tight">Recomendado: Quadrada (Ex: 500x500px)</p>
                </div>

                <div class="md:col-span-2 space-y-8">
                    <div class="group">
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 group-focus-within:text-nhamazi-blue transition-colors">
                            Nome Completo
                        </label>
                        <input type="text" name="name" placeholder="Ex: Eng. Pedro Nhamazy Chambisso" required 
                            class="w-full bg-slate-50 border-2 border-slate-50 p-4 rounded-2xl focus:bg-white focus:border-nhamazi-blue/20 focus:ring-4 focus:ring-nhamazi-blue/5 outline-none transition-all font-bold text-slate-700">
                    </div>

                    <div class="group">
                        <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 group-focus-within:text-nhamazi-blue transition-colors">
                            Cargo / Especialidade
                        </label>
                        <input type="text" name="position" placeholder="Ex: Diretor Geral ou Especialista em Redes" required 
                            class="w-full bg-slate-50 border-2 border-slate-50 p-4 rounded-2xl focus:bg-white focus:border-nhamazi-blue/20 outline-none transition-all font-bold text-slate-700">
                    </div>
                </div>
            </div>

            <div class="group">
                <label class="block text-xs font-black uppercase tracking-widest text-slate-400 mb-2 group-focus-within:text-nhamazi-blue transition-colors">
                    Breve Biografia (Aparecerá no final do artigo)
                </label>
                <textarea name="bio" rows="4" placeholder="Fale sobre a experiência e foco deste especialista..." required 
                    class="w-full bg-slate-50 border-2 border-slate-50 p-5 rounded-3xl focus:bg-white focus:border-nhamazi-blue/20 outline-none transition-all font-medium text-slate-600 resize-none leading-relaxed"></textarea>
            </div>

            <div class="flex flex-col md:flex-row items-center justify-between gap-6 pt-10 border-t border-slate-100">
                <a href="{{ route('admin.writers.index') }}" 
                   class="text-xs font-black uppercase tracking-[0.2em] text-slate-400 hover:text-red-500 transition-colors order-2 md:order-1">
                    <i class="fas fa-times mr-2"></i> Cancelar
                </a>
                
                <button type="submit" 
                        class="w-full md:w-auto bg-nhamazi-blue text-white px-12 py-5 rounded-2xl font-black uppercase tracking-[0.2em] shadow-xl shadow-nhamazi-blue/20 hover:bg-[#001a35] hover:-translate-y-1 transition-all duration-300 order-1 md:order-2 flex items-center justify-center gap-3">
                    Salvar Perfil <i class="fas fa-user-check text-sm"></i>
                </button>
            </div>
        </form>
    </div>

    <script>
        function previewImage(event) {
            const input = event.target;
            const preview = document.getElementById('preview');
            const icon = document.getElementById('placeholder-icon');
            
            if (input.files && input.files[0]) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                    icon.classList.add('hidden');
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
</body> 
</html>