<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function index(Request $request)
    {
		// $request->user()->checkout('price_1Jy6YlAf2z1VXSzkdfhkvZp3');
        return inertia('Stripe/Index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
    }
}
