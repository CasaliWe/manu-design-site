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

}
