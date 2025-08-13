<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
     public function index()
    {
        return view('admin.projects');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'link' => 'nullable|url',
        ]);

        Project::create($request->all());

        return redirect()->route('admin.projects')->with('success', 'Project added successfully!');
    }
}
