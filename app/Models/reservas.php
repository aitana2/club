<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservas extends Model
{
    use HasFactory;
    protected $fillable =['socioid', 'pistaid', 'fecha', 'hora_inicio', 'hora_fin'];
}
