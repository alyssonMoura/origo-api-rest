<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plano extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'price'
    ];

    public function clientes(){
        return $this->belongsToMany(Cliente::class,'cliente_planos');
    }
}
