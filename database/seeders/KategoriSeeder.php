<?php

namespace Database\Seeders;
use App\Models\Kategori;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=
        [
            [
                'id_kategori' => 1,
                'kategori' => 'Filsafat'
            ],
            [
                'id_kategori' => 2,
                'kategori' => 'Sejarah'
            ],
            [
                'id_kategori' => 3,
                'kategori' => 'Ekonomi'
            ],
            [
                'id_kategori' => 4,
                'kategori' => 'Manajemen'
            ],
            [
                'id_kategori' => 5,
                'kategori' => 'Hukum'
            ]
        ];
        foreach($data as $data){
            Kategori::create($data);
        }


    }
}
