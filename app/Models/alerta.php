<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class alerta extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_alerta';
    protected $primaryKey = 'COD_ALERTA';
}