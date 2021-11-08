<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
            'id_movie' => '123',
            'nama_movie' => 'bahasa indonesia',
            'tahun_movie' => '2002',
            'description'=> 'lorem ipsum',
            'sutradara' => 'abd'
        ]);
    }
}
