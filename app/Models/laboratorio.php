<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class laboratorio extends Model
{
    protected $table = 'catLaboratorio';
    protected $primaryKey = 'kId';
    public $timestamps = false;
}