<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Cadastro extends Model
{
    use HasFactory;
    protected $table = 'historias';
    protected $fillable = [
        'capitulo',
        'titulo',
        'sinopse',
        'data',
    ];


    


}
