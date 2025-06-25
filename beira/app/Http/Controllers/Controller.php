<?php

namespace App\Http\Controllers;

use Illuminate\Http\Client\Request;

abstract class Controller
{
    public function home() {
    return view('site.home');
}

public function historia() {
    return view('site.historia');
}

public function galeria() {
    return view('site.galeria');
}

public function contato() {
    return view('site.contato');
}

public function enviarContato(Request $request) {
    $validated = $request->validate([
        'nome' => 'required',
        'email' => 'required|email',
        'mensagem' => 'required',
    ]);

    // Aqui pode salvar no banco ou enviar por email
    return back()->with('success', 'Mensagem enviada com sucesso!');
}

}
