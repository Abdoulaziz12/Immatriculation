<?php

namespace App\Models;

use App\Models\Voiture;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = ['id','lastname','firstname','email','adress','work'];

    public function client()
    {
        return $this->hasMany(Voiture::class, 'client_id');
    }
}
