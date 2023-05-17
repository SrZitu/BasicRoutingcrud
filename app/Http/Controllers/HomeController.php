<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return 'Hello from home page!';
    }

    public function about()
    {
        return 'Hello from about page.';
    }

    public function contact()
    {
        return 'Contact us at zitu094@gmail.com';
    }
}
