<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

class AdminPageController
{

    // exibe página dashboard
    public function showDashboard()
    {
        return view('admin.dashboard');
    }

}