<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reporte extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_reporte';
    protected $primaryKey = 'COD_REPORTE';
}