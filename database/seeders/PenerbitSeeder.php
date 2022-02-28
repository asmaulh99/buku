<?php

namespace Database\Seeders;
use App\Models\Penerbit;
use Illuminate\Database\Seeder;


class PenerbitSeeder extends Seeder
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
                'id_penerbit' => 1,
                'penerbit' => 'Gramedia'
            ],
            [
                'id_penerbit' => 2,
                'penerbit' => 'Erlangga'
            ],
            [
                'id_penerbit' => 3,
                'penerbit' => 'Divapress'
            ],
            [
                'id_penerbit' => 4,
                'penerbit' => 'Mizan Pustaka'
            ],
            [
                'id_penerbit' => 5,
                'penerbit' => 'Republika'
            ]
        ];

        foreach($data as $data){
            Penerbit::create($data);
        }
    }
}
