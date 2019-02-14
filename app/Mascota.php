<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    // protected $primaryKey = "ID";
    protected $table = "Mascotas";
    public $timestamps = false;
}
