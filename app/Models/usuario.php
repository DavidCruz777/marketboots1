<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persona extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_usuario';
    protected $primaryKey = 'COD_USUARIO';
}