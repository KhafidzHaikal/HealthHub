<?php

namespace App\Http\Controllers;

use App\Models\Apotek;
use App\Models\Diagnosa;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.dashboard', [
            'title' => 'Dashboard',
            'jumlahApotek' => $this->jumlahApotek(),
            'jumlahdiagnosa' => $this->jumlahdiagnosa(),
            'apotek' => Apotek::all()
        ]);
    }

    public function jumlahApotek(){
        $apotek = Apotek::count();
        return $apotek;
    }

    public function jumlahdiagnosa(){
        $diagnosa = Diagnosa::count();
        return $diagnosa;
    }
}
