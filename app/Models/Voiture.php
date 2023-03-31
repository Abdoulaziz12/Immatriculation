<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table = 'voitures';
    protected $fillable = ['id', 'client_id','owner','marque','matricule', ];

    public function voitures()
    {
        return $this->belongsTo(Clients::class, 'client_id');
    }
}
