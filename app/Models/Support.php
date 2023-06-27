<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support extends Model
{
    use HasFactory;

    // Essa propriedade indica quais as colunas podem ser prenchidas por um array na hora de cadastrar e actualizar
    protected $fillable = [
        'subject',
        'body',
        'status'
    ];
}
