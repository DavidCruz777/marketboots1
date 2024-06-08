<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'tbl_campana';
    protected $primaryKey = 'COD_CAMPANA';
}
