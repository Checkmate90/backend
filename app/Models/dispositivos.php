<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dispositivos extends Model
{
    use HasFactory;
    protected $fillable = ['nombreDispositivos', 'modeloDispositivos', 'marcasDispositivos'];
    public $timestamps = false;
}
