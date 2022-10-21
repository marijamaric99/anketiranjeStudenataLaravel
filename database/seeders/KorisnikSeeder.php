<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KorisnikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('korisnici')
            ->insert([
                ['ime'=>'Anđela', 'prezime'=>'Đerek', 'email'=>'aderek@gmail.com'],
                ['ime'=>'Mihaela', 'prezime'=>'Tovilo', 'email'=>'mtovilo@gmail.com'],
                ['ime'=>'Marina', 'prezime'=>'Jolić', 'email'=>'mjolic@gmail.com'],
                ['ime'=>'Lucija', 'prezime'=>'Živković', 'email'=>'lzivkovic@gmail.com'],
                ['ime'=>'Marija', 'prezime'=>'Hrkać', 'email'=>'mhrkac@gmail.com'],
            ]);
    }
}
