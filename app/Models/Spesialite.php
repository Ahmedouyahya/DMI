<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialite extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'spesialite';

    // Specify the fillable attributes if necessary
    protected $fillable = ['name', 'description'];
}

