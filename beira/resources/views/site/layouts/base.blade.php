<head>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-cover bg-center bg-no-repeat text-white font-sans leading-relaxed"
      style="background-image: url('/images/beira1.jpg');">
    
    <!-- Camada escura semi-transparente -->
    <div class="min-h-screen flex flex-col justify-between bg-black/50">

        <!-- Header -->
        <header class="bg-blue-900 bg-opacity-90 text-white shadow">
            <div class="max-w-6xl mx-auto px-4 py-4 flex flex-col sm:flex-row justify-between items-center">
                <h1 class="text-2xl font-bold mb-2 sm:mb-0">Comunidade Beira</h1>
                <nav class="space-x-4 text-sm sm:text-base">
                    <a href="{{ route('home') }}" class="hover:underline">Início</a>
                    <a href="{{ route('historia') }}" class="hover:underline">História</a>
                    <a href="{{ route('galeria') }}" class="hover:underline">Galeria</a>
                    <a href="{{ route('contato') }}" class="hover:underline">Contato</a>
                </nav>
            </div>
        </header>

        <!-- Main -->
        <main class="flex-grow flex items-center justify-center py-10 px-4">
            <div class="w-full max-w-3xl">
                @yield('content')
            </div>
        </main>

        <!-- Rodapé -->
        <footer class="bg-blue-900 bg-opacity-90 text-white text-center px-4 py-6 text-sm">
            <p>&copy; {{ date('Y') }} Site sobre a Comunidade Beira — Projeto de Extensão</p>
            <div class="mt-2">
                <p><strong>Autores:</strong> Matheus Ferrari e Sofya Andrade</p>
                <p>
                    <strong>E-mails:</strong>
                    <a href="mailto:matheusferrarimf@unidavi.edu.br" class="underline hover:text-gray-300">matheusferrarimf@unidavi.edu.br</a> •
                    <a href="mailto:sofya.andrade@unidavi.edu.br" class="underline hover:text-gray-300">sofya.andrade@unidavi.edu.br</a>
                </p>
                <p><strong>Disciplina:</strong> Programação Web II</p>
            </div>
        </footer>

    </div>
</body>

