@extends('site.layouts.base')

@section('title', 'Contato')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Entre em Contato</h2>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-2 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('contato.enviar') }}" class="space-y-4">
        @csrf

        <div>
            <label for="nome" class="block font-medium">Nome</label>
            <input type="text" id="nome" name="nome" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label for="email" class="block font-medium">Email</label>
            <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded p-2" required>
        </div>

        <div>
            <label for="mensagem" class="block font-medium">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="5" class="w-full border border-gray-300 rounded p-2" required></textarea>
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Enviar</button>
    </form>
@endsection
