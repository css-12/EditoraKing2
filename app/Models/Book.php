<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'subtitulo', 'autor', 'genero_id', 'pagina', 'notaleitor', 'sinopse'];

    public function genero()
    {

        return $this->belongsTo(Genero::class);
    }
}
