<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Middleware\CekId;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('registration', [
            'title' => 'Regitsration | Health HUB'
        ]);
    }

    public function store(Request $request)
    {
        $validatedata = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:user',
            'no_ktp' => 'required|unique:user',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'foto' => 'required',
            'alamat_user' => 'required',
            'no_hp' => 'required|max:13',
            'password' => 'required|min:6|max:225'
        ]);

        $validatedata['password'] = Hash::make($validatedata['password']);
        User::create($validatedata);
        $request->session()->flash('success', 'Registration Success');
        
        return redirect('/login');
    }
}
