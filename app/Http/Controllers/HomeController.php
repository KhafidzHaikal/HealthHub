<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home' 
        ]);
    }

    public function diagnoses()
    {
        return view('diagnoses', [
            'title' => 'Diagnoses'
        ]);
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }

    public function history(){
        return view('history',[
            'title'=> 'History'
        ]);
    }

    public function medicine(){
        return view('medicine',[
            'title'=> 'Medicine '
        ]);
    }

    public function medicine1(){
        return view('medicine2', [
            'title' => 'Medicine'
        ]);
    }

    public function order1(){
        return view('order1',[
            'title' => 'Your Order'
        ]);
    }

    public function order2(){
        return view('order2', [
            'title' => 'Your Order'
        ]);
    }
}
