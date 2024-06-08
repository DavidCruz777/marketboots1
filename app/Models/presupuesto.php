<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class presupuesto extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_presupuesto';
    protected $primaryKey = 'COD_PRESUPUESTO';
}