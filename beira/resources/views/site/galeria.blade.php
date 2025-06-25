@extends('site.layouts.base')

@section('title', 'Galeria de Imagens')

@section('content')
    <div x-data="{ lightbox: null }">
        <!-- Caixa com fundo e título -->
        <div class="bg-black/60 backdrop-blur-md text-white p-8 rounded-xl shadow-lg">
            <h2 class="text-2xl font-bold mb-4">Galeria de Imagens</h2>
            <p class="mb-6">Aqui você verá imagens que ajudam a contar a história da comunidade Beira.</p>

            <!-- Galeria de imagens -->
            <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                @foreach ([
                    'images/beira1.jpg',
                    'images/beira2.png',
                ] as $image)
                    <img src="{{ asset($image) }}"
                         alt="Imagem da Comunidade Beira"
                         class="rounded shadow cursor-pointer hover:scale-105 transition duration-200"
                         @click="lightbox = '{{ asset($image) }}'">
                @endforeach
            </div>
        </div>

        <!-- Modal Lightbox -->
        <div x-show="lightbox"
             x-transition
             @keydown.escape.window="lightbox = null"
             class="fixed inset-0 bg-black/80 backdrop-blur-sm flex items-center justify-center z-50"
             style="display: none;">
            <div class="relative max-w-4xl w-full px-4">
                <button @click="lightbox = null"
                    class="absolute -top-6 right-0 text-black text-2xl font-bold bg-white/90 rounded-full px-3 py-1 shadow hover:bg-red-600 hover:text-white transition">
                    &times;
                </button>

                <img :src="lightbox" class="max-h-[90vh] w-full rounded shadow-xl object-contain">
            </div>
        </div>
    </div>
@endsection
