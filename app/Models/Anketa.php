<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anketa extends Model
{
    use HasFactory;
    protected $table = 'anketa';
    protected $fillable = ['naziv', 'datum_pocetka', 'datum_zavrsetka'];

    public function pitanja()
    {
        return $this->hasMany(Pitanje::class);
    }


    public function getDatumPocetkaAttribute($datum)
    {
        return Carbon::parse($datum)->format('d.m.Y');
    }

    public function setDatumPocetkaAttribute($datum)
    {
        $this->attributes['datum_pocetka'] = Carbon::parse($datum)->format('Y-m-d');
    }


}
