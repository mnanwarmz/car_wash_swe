<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Question;
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

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'subject' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'query' => 'required',
        ]);
        if (auth()->user()) {
            $data['user_id'] = auth()->user()->id;
        }
        Question::create($data);
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
