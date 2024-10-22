<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PoliklinikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('polikliniks')->insert([
            'namapoli' => 'umum'
        ]);
        DB::table('polikliniks')->insert([
            'namapoli' => 'gigi'
        ]);
        DB::table('polikliniks')->insert([
            'namapoli' => 'kulit'
        ]);
        DB::table('polikliniks')->insert([
            'namapoli' => 'mata'
        ]);
        DB::table('polikliniks')->insert([
            'namapoli' => 'obgyn'
        ]);
    }
}
