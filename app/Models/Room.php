<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $fillable=[
        'hotel_id',
        'nom',
        'prix',
        'nombre_lits',
        'max_adulte',
        'max_enfants',
        'statut',
    ];   
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
                 
}
