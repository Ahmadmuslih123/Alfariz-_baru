<?php

namespace App\Http\Controllers;

use App\Models\Datapenumpang;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Pesan(request $request)
    {
        // dd($request->all());
        // var_dump($request);
        // die();
        $dataku = Datapenumpang::create([
            'nama' => $request->nama_penyewa,
            'jemput' => $request->titik_jemput,
            'tujuan'=> $request->titik_tujuan,
            'armada'=> $request->armada,
            'tanggalberangkat'=> $request->tanggal_berangkat,
            'tanggalpulang'=> $request->tanggal_pulang
        ]);
        $data = Datapenumpang::find($dataku->id);
        $text = "https://api.whatsapp.com/send?phone=6282119066428&text=%2ANama%2A%20%3A%20" . $data->nama . "%0D%0A%2ATitik%20Jemput%2A%20%3A%20" . $data->jemput . "%0D%0A%2ATitik%20Tujuan%2A%20%3A%20" . $data->tujuan . "%0D%0A%2ATanggal%20Keberangkatan%2A%20%3A%20" . $data->tanggalberangkat . "%0D%0A%2ATanggal%20Kepulangan%2A%20%3A%20" . $data->tanggalpulang . "%0D%0A%2AJenis%20Armada%2A%20%3A%20" . $data->armada;
        return redirect()->away($text);

        // dd($data->nama);
    }
}
