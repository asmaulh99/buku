<?php

namespace Database\Seeders;
use App\Models\Buku;
use Illuminate\Database\Seeder;


class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
            [
                'id_buku' => 1,
                'id_kategori' => 1,
                'id_penerbit' => 1,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'gambar' => 'filosofiteras.jpg'
            ],
            [
                'id_buku' => 2,
                'id_kategori' => 2,
                'id_penerbit' => 3,
                'judul' => 'Mitologi Dunia',
                'penulis' => 'Hegar Valdmar Revaldo',
                'gambar' => 'mitologidunia.jpg'
            ],
            [
                'id_buku' => 3,
                'id_kategori' => 3,
                'id_penerbit' => 2,
                'judul' => 'Mikroekonomi',
                'penulis' => 'Robert S. Pindyck',
                'gambar' => 'mikroekonomi.jpg'
            ],
            [
                'id_buku' => 4,
                'id_kategori' => 4,
                'id_penerbit' => 5,
                'judul' => 'Nature Based Management',
                'penulis' => 'Satrio Wahono',
                'gambar' => 'naturebasemgt.jpg'
            ],
            [
                'id_buku' => 5,
                'id_kategori' => 5,
                'id_penerbit' => 4,
                'judul' => 'Membumikan Hukum Islam melalui Maqasid Syariah',
                'penulis' => 'Jasser Auda',
                'gambar' => 'membumikanhukumsilam.jpg'
            ]
        ];

        foreach($data as $data){
            Buku::create($data);
        }
    }
}
