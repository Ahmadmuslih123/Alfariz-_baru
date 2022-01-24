<?php

namespace Database\Seeders;

use App\Models\Tentang;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Tentang::create([
            'about' => "AlFariz Trans adalah penyedia jasa sewa bus pariwisata yang senantiasa memberikan armada bus terbaik dengan HARGA kompetitif, Fasilitas Lengkap serta opsi varian bus lengkap sesuai kebutuhan perjalanan. Dengan mengutamakan kenyamanan para penumpang, agar",
            'kontak'=> "082119066428",
            'alamat'=> "JFVG+25M, Dusun I, Tegalpingen, Pengadegan, Kabupaten Purbalingga, Jawa Tengah 53393",
            'instagram'=>"https://www.instagram.com/alfariztrans/",
        ]);
    }
}
