<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnketaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anketa')
            ->insert([
                ['naziv'=>'Psihičko zdravlje studenata',
                'datum_pocetka' => Carbon::create('2022', '05', '04'),
                'datum_zavrsetka'=> Carbon::create('2022','05','22')]
            ]);
    }
}
