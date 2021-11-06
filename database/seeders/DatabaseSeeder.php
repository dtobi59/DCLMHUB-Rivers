<?php

namespace Database\Seeders;

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
        $groups = [
            0 => [
              'id' => '159',
              'name' => 'P/Harcourt',
            ],
            1 => [
              'id' => '160',
              'name' => 'Bori',
            ],
            2 => [
              'id' => '161',
              'name' => 'Degema',
            ],
            3 => [
              'id' => '163',
              'name' => 'Emuoha',
            ],
            4 => [
              'id' => '164',
              'name' => 'Etche',
            ],
            5 => [
              'id' => '165',
              'name' => 'Ahoada East',
            ],
            6 => [
              'id' => '166',
              'name' => 'Eleme',
            ],
            7 => [
              'id' => '167',
              'name' => 'Bonny',
            ],
            8 => [
              'id' => '168',
              'name' => 'Omoku',
            ],
            9 => [
              'id' => '169',
              'name' => 'Abua',
            ],
            10 => [
              'id' => '170',
              'name' => 'Gokana',
            ],
            11 => [
              'id' => '171',
              'name' => 'Andoni/Opobo',
            ],
            12 => [
              'id' => '172',
              'name' => 'Ikwerre',
            ],
            13 => [
              'id' => '173',
              'name' => 'Oyigbo',
            ],
            14 => [
              'id' => '174',
              'name' => 'Tai',
            ],
            15 => [
              'id' => '175',
              'name' => 'Ahoada West',
            ],
            16 => [
              'id' => '176',
              'name' => 'Afam',
            ],
            17 => [
              'id' => '177',
              'name' => 'Elele/Egbeda',
            ],
            18 => [
              'id' => '178',
              'name' => 'Umuebulu',
            ],
            19 => [
              'id' => '602',
              'name' => 'ABULOMA',
            ],
            20 => [
              'id' => '603',
              'name' => 'CHOBA',
            ],
            21 => [
              'id' => '604',
              'name' => 'OZUOBA',
            ],
            22 => [
              'id' => '605',
              'name' => 'DIOBU',
            ],
            23 => [
              'id' => '606',
              'name' => 'OGBUM NU ABALI',
            ],
            24 => [
              'id' => '607',
              'name' => 'OLANADA',
            ],
            25 => [
              'id' => '608',
              'name' => 'ORO- IGWE',
            ],
            26 => [
              'id' => '609',
              'name' => 'ENEKA',
            ],
            27 => [
              'id' => '610',
              'name' => 'PIPELINE',
            ],
            28 => [
              'id' => '611',
              'name' => 'RUKPOKWU',
            ],
            29 => [
              'id' => '612',
              'name' => 'RUMUEME',
            ],
            30 => [
              'id' => '613',
              'name' => 'RUMUIGBO',
            ],
            31 => [
              'id' => '614',
              'name' => 'RUMUODARA',
            ],
            32 => [
              'id' => '615',
              'name' => 'RUMUAGHOLU',
            ],
            33 => [
              'id' => '616',
              'name' => 'RUMUOLUMENI',
            ],
            34 => [
              'id' => '617',
              'name' => 'RUMUOMASI',
            ],
            35 => [
              'id' => '618',
              'name' => 'TOWN',
            ],
            36 => [
              'id' => '619',
              'name' => 'WOJI',
            ],
            37 => [
              'id' => '620',
              'name' => 'RUMUOKORO',
            ],
            38 => [
              'id' => '621',
              'name' => 'CAMPUS',
            ],
            39 => [
              'id' => '769',
              'name' => 'Ogu-Bolo',
            ],
            40 => [
              'id' => '770',
              'name' => 'Okrika',
            ],
        ];

        foreach ($groups as $group) {
            \App\Models\OldGroup::create($group);
        } 

    }
}
