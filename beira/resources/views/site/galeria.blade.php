@extends('site.layouts.base')

@section('title', 'Galeria de Imagens')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Galeria de Imagens</h2>
    <p>Aqui você verá imagens que ajudam a contar a história da comunidade Beira.</p>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-4 mt-6">
        <img src="{{ asset('images/beira1.jpg') }}" alt="Imagem 1" class="rounded shadow">
        <img src="{{ asset('images/beira2.png') }}" alt="Imagem 2" class="rounded shadow">
    </div>
@endsection
