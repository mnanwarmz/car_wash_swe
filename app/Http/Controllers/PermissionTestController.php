<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionTestController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:edit articles')->only('testmiddleware');
        $this->middleware('role:admin|writer')->only('testmiddleware');
    }

    public function testmiddleware()
    {
        return 'Middleware Works';
    }
}
