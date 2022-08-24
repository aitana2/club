<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservas extends Model
{
    use HasFactory;
    protected $fillable =['socioid', 'courtid', 'date', 'satart_time', 'finish_time'];
}
