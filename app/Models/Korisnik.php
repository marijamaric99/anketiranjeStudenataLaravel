<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Korisnik extends Model
{
    use HasFactory;
    protected $table = 'korisnici';
    protected $fillable = ['ime', 'prezime', 'email'];

    public function odgovori()
    {
        return $this->hasMany(Odgovor::class);
    }

}
