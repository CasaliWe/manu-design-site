<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;

class PageController
{

    // exibe página inicial
    public function showHome()
    {
        return view('site.home');
    }

    // exibe página sobre
    public function showSobre()
    {
        return view('site.sobre');
    }

    // exibe página servicos
    public function showServicos()
    {
        return view('site.servicos');
    }

    // exibe página projetos
    public function showProjetos()
    {
        return view('site.projetos');
    }

    // exibe página contatos
    public function showContatos()
    {
        return view('site.contatos');
    }

}
