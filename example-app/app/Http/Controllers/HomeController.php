<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use App\Models\beranda;
use App\Models\perjalanan;
use App\Models\Tentang;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $beranda = beranda::all();
        $perjalanan = perjalanan::all();
        $armada = Armada::all();
        $tentang = Tentang::find(1);
        
        return view('welcome',compact('beranda','perjalanan','armada','tentang'));
    }
}
