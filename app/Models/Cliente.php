<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['municipio_id','name', 'email','data_nascimento','municipio_id','telefone'];

    public function planos(){
        return $this->belongsToMany(Plano::class,'cliente_planos');
    }
    public function municipios(){
        return $this->belongsTo(Municipio::class,'municipio_id','id');
    }

    public function estados()
    {
        return $this->hasOneThrough(Estado::class, Municipio::class,'id','id','municipio_id','estado_id');
    }
}
