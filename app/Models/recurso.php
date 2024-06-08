<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recurso extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_recursos';
    protected $primaryKey = 'COD_RECURSO';
}
  