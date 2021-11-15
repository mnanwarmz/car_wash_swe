<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $auth = auth()->user();
        return inertia('Admin/Index', [
            'auth' => $auth,
        ]);
    }
}
