<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class ArmadaController extends Controller
{
    public function index()
    {
        $data = Armada::all();
        return view('admin.armada', compact('data'));
    }
    public function tambah()
    {
        return view('admin.armada-tambah');
    }
    public function kirim(Request $request)
    {
        //    dd($request->all());
        $imageName = time() . '.' . $request->image->extension();
        Armada::create([
            'tittle' => $request->tittle,
            'seat' => $request->seat,
            'kapasitas' => $request->kapasitas,
            'image' => $imageName
        ]);
        $request->image->move(public_path('images'), $imageName);
        return redirect()->route('armada');
    }

    public function edit($id)
    {
        $data = Armada::find($id);

        if (empty($data)) {
            # jika data kosong
            return redirect()->route('armada');
        } else {
            # jika tidak kosong maka 
            return view('admin.armada-edit',compact('data'));
        }
        
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $data=Armada::find($id);

        if ($request->image == "") {
            # jika tidak ada request gambar maka
            $data->update([
                'tittle' => $request->tittle,
                'seat' => $request->seat,
                'kapasitas' => $request->kapasitas,
            ]);
        } else {
            # jika ada request image maka
            $imageName = time() . '.' . $request->image->extension();
            $data->update([
                'tittle' => $request->tittle,
                'seat' => $request->seat,
                'kapasitas' => $request->kapasitas,
                'image' => $imageName
            ]);
            $request->image->move(public_path('images'), $imageName);
        }
        return redirect()->route('armada');
    }
    public function hapus($id)
    {
        $data = Armada::find($id)->delete();
        return redirect()->route('armada');
    }
}
