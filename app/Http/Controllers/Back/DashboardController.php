<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'menu' => 'dashboard',
            'submenu' => '',
            
        ];
        return view('back.pages.dashboard.index', $data);
    }
}
