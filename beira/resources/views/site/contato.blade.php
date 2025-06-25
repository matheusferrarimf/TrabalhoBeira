@extends('site.layouts.base')

@section('title', 'Contato')

@section('content')
    <h2 class="text-3xl font-bold text-center mb-8 text-white drop-shadow">Entre em Contato</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-6 text-center max-w-lg mx-auto">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contato.enviar') }}"
      class="w-full max-w-2xl mx-auto bg-white/20 backdrop-blur-md p-8 rounded-xl shadow-lg space-y-6">


        @csrf

        <div>
            <label for="nome" class="block text-sm font-semibold text-gray-800 mb-1">Nome</label>
            <input type="text" id="nome" name="nome" required
                   class="w-full p-3 rounded-lg bg-white/80 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">

        </div>

        <div>
            <label for="email" class="block text-sm font-semibold text-gray-800 mb-1">Email</label>
            <input type="email" id="email" name="email" required
                   class="w-full p-3 rounded-lg bg-white/80 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600">

        </div>

        <div>
            <label for="mensagem" class="block text-sm font-semibold text-gray-800 mb-1">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" required
                                class="w-full p-3 rounded-lg bg-white/80 text-gray-800 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-600"></textarea>
        </div>

        <div class="text-center">
            <button type="submit"
                    class="inline-flex items-center gap-2 px-6 py-3 bg-blue-700 hover:bg-blue-600 transition text-white font-semibold rounded-lg shadow">
                ✉️ Enviar Mensagem
            </button>
        </div>
    </form>
@endsection
