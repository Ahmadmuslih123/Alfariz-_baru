<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Tentang::find(1);
        return view('admin.index', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data = Tentang::find(1);
        // dd($request->all());

        $data->update([
            'alamat' => $request->alamat,
            'kontak' => $request->kontak,
            'instagram' => $request->instagram,
            'about' => $request->about,
        ]);

        return redirect()->route('tentang');
    }

}
