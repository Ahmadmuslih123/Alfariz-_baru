<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //
    public function index()
    {
        $data = beranda::all();
        return view('admin.beranda', compact('data'));
    }
    public function tambah()
    {
        return view('admin.beranda-tambah');
    }
    public function kirim(Request $request)
    {
        //    dd($request->all());
        $imageName = time() . '.' . $request->image->extension();
        beranda::create([
            'image' => $imageName
        ]);
        $request->image->move(public_path('beranda'), $imageName);
        return redirect()->route('beranda');
    }
    public function hapus($id)
    {
        $data = beranda::find($id)->delete();
        return redirect()->route('beranda');
    }
}
