<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PersonalInfo; 

class PersonalInfoController extends Controller
{
    public function index()
    {
        return view('admin.personalinfo');
    }

    public function store(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'address' => 'nullable|string',
        ]);

        PersonalInfo::create($request->all());

        return redirect()->route('admin.personalinfo')->with('success', 'Personal information saved!');
    }
}
