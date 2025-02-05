<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Home Page',
            'description' => 'This is a home page'
        ];
        return view('front.home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Page',
            'description' => 'This is an about page'
        ];
        return view('front.about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Page',
            'description' => 'This is a contact page'
        ];
        return view('front.contact', $data);
    }
}
