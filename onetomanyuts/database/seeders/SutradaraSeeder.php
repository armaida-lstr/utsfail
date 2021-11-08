<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SutradaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sutradaras')->insert([
            'id_sutradara' => '123',
            'nama_sutradara' => 'bahasa indonesia',
            'alamat_sutradara' => 'jalan',
            'no_telp'=> '085',
    
        ]);
    }
}
