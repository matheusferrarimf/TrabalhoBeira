<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') — Comunidade Beira</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-gray-100 text-gray-900 font-sans leading-relaxed">

    <!-- Barra de Navegação -->
    <header class="bg-blue-800 text-white shadow">
        <div class="max-w-4xl mx-auto px-4 py-4 flex flex-col sm:flex-row justify-between items-center">
            <h1 class="text-2xl font-bold mb-2 sm:mb-0">Comunidade Beira</h1>
            <nav class="space-x-4 text-sm sm:text-base">
                <a href="{{ route('home') }}" class="hover:underline">Início</a>
                <a href="{{ route('historia') }}" class="hover:underline">História</a>
                <a href="{{ route('galeria') }}" class="hover:underline">Galeria</a>
                <a href="{{ route('contato') }}" class="hover:underline">Contato</a>
            </nav>
        </div>
    </header>

    <!-- Conteúdo principal -->
    <main class="max-w-3xl mx-auto px-4 py-10 bg-white mt-6 mb-12 rounded shadow-sm">
        @yield('content')
    </main>

    <!-- Rodapé -->
    <footer class="bg-blue-800 text-white text-center px-4 py-6 text-sm">
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

</body>
</html>
