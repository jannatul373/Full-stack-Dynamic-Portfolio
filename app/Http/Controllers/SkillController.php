<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return view('admin.skills');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'percentage' => 'required|integer|min:0|max:100',
            'description' => 'required|string'
        ]);

        Skill::create($request->all());

        return redirect()->route('admin.skills')->with('success', 'Skill added successfully!');
    }
}
