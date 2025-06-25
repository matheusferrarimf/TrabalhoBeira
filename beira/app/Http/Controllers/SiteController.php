<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class SiteController extends Controller
{
    public function home()
    {
        return view('site.home');
    }

    public function historia()
    {
        return view('site.historia');
    }

    public function galeria()
    {
        return view('site.galeria');
    }

    public function contato()
    {
        return view('site.contato');
    }

    public function postContato(Request $request)
{
    $validated = $request->validate([
        'nome' => 'required|string|max:255',
        'email' => 'required|email',
        'mensagem' => 'required|string',
    ]);

    Contato::create($validated);

    return back()->with('success', 'Mensagem enviada com sucesso!');
}

}
