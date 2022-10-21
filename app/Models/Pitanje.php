<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitanje extends Model
{
    use HasFactory;
    protected $table = 'pitanja';
    protected $fillable = ['naziv', 'anketa_id'];

    public function odgovori()
    {
        return $this->hasMany(Odgovor::class);
    }

    public function anketa()
    {
        return $this->belongsTo(Anketa::class);
    }

}
