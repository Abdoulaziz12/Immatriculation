<?php

namespace App\Models;

use App\Models\Clients;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voiture extends Model
{
    protected $table = 'voitures';
    protected $fillable = ['id', 'client_id','title','owner','marque','matricule', ];

    public function client() 
    {
        return $this->belongsTo(Clients::class);
    }
}
