<?php

namespace App\Http\Controllers;

use App\Models\Datapenumpang;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Datapenumpang::all()->count();
        return view('admin.admin',compact('data') );
    }
}
