<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Odgovor extends Model
{
    use HasFactory;
    protected $table = 'odgovor';
    protected $fillable = ['odgovor', 'pitanje_id', 'korisnik_id'];

    public function korisnik()
    {
        return $this->belongsTo(Korisnik::class);
    }

    public function pitanje()
    {
        return $this->belongsTo(Pitanje::class);
    }

    public function getOdgovorAttribute($value)
    {
        if ($value == 1) {
            return 'Da';
        } else {
            return 'Ne';
        }
    }

    public function setOdgovorAttribute($value)
    {
        $this->attributes['odgovor'] = $value == 'Da' ? 1 : 0;
    }

}
