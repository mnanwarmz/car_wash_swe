<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return inertia('Home/Index');
    }

    public function about()
    {
        return inertia('Home/About');
    }

    public function contact()
    {
        return inertia('Home/Contact');
    }

    public function services()
    {
        return inertia('Home/Services');
    }

    public function pricing()
    {
        return inertia('Home/Pricing');
    }
}
