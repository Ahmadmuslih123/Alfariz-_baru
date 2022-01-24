<?php

namespace App\Http\Controllers;

use App\Models\Datapenumpang;
use Illuminate\Http\Request;

class DatapenumpangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Datapenumpang::all();
        return view('admin.datapenumpang',compact('data'));

    }
    public function hapus($id)
    {
        $data= Datapenumpang::find($id);
        $data->delete();
        return redirect()->route('datapenumpang');
    }
}