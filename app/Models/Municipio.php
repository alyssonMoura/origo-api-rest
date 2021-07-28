<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $fillable = ['estado_id','name'];

    public function estados(){
        $this->belongsTo(Estado::class, 'estados');
    }

    public function clientes(){
        return $this->hasMany(Cliente::class, 'municipio_id');
    }
}
