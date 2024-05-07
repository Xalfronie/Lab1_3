<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegistroController extends Controller
{
    public function registro()
    {
        return view('registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18',
            'email' => 'required|email|unique:usuarios,email',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'nombre' => $request->input('name'),
            'edad' => $request->input('age'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')), 
        ]);

        return redirect()->route('login');
    }
}
