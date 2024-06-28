<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

class HelpersController
{
    // envio de email
    public function enviarEmail(Request $request)
    {
        return redirect()->route('home')->with('success', 'Contato enviado com sucesso!');
    }
}
