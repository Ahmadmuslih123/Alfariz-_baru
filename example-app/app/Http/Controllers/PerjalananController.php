<?php

namespace App\Http\Controllers;

use App\Models\perjalanan;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    //
    public function index()
    {
        $data = perjalanan::all();
        return view('admin.perjalanan', compact('data'));
    }
    public function tambah()
    {
        return view('admin.perjalanan-tambah');
    }
    public function kirim(Request $request)
    {
        //    dd($request->all());
        $imageName = time() . '.' . $request->image->extension();
        perjalanan::create([
            'tittle' => $request->tittle,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName
        ]);
        $request->image->move(public_path('perjalanan'), $imageName);
        return redirect()->route('perjalanan');
    }

    public function edit($id)
    {
        $data = perjalanan::find($id);

        if (empty($data)) {
            # jika data kosong
            return redirect()->route('perjalanan');
        } else {
            # jika tidak kosong maka 
            return view('admin.perjalanan-edit', compact('data'));
        }
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data=perjalanan::find($id);

        if ($request->image == "") {
            # jika tidak ada request gambar maka
            $data->update([
                'tittle' => $request->tittle,
                'deskripsi' => $request->deskripsi,
            ]);
        } else {
            # jika ada request image maka
            $imageName = time() . '.' . $request->image->extension();
            $data->update([
                'tittle' => $request->tittle,
                'deskripsi' => $request->deskripsi,
                'image' => $imageName
            ]);
            $request->image->move(public_path('perjalanan'), $imageName);
        }
        return redirect()->route('perjalanan');
    }
    public function hapus($id)
    {
        $data = perjalanan::find($id)->delete();
        return redirect()->route('perjalanan');
    }


}
