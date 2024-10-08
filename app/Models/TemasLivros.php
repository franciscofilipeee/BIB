<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemasLivros extends Model
{
    use HasFactory;

    protected $table = 'temas_livros';

    protected $fillable = [
        'nome'
    ];
}
