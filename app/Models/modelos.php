<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelos extends Model
{
    use HasFactory;
    protected $fillable = ['nombreModelos','marcas_id'];
    public $timestamps = false;
}
