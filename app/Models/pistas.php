<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pistas extends Model
{
    use HasFactory;
    protected $fillable =['deporte', 'reserva'];
}