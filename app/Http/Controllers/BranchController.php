<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    public function index($branchId)
    {
        $branch = Branch::findOrFail($branchId);
        return inertia('Branch/Index', compact('branch'));
    }

    public function create()
    {
        // Inquire on branch location
        // Inquire on branch name
        return inertia('Branch/Create');
    }

    public function store(Request $request)
    {
        // Create Location
        // Link Location to Branch
        // Create Branch
        // Link Branch to Current User
        Branch::create([
            'name' => $request->name,
            'location_id' => $request->location_id,
            'user_id' => auth()->user()->id,
            'status' => 'Inactive'
        ]);
        // Once Branch is deemed valid, give user branch manager role
    }

    public function show($id)
    {
        return inertia('Branch/Show');
    }
}
