<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipe extends Model
{
    use HasFactory;
    public $table = "municipes";
    protected $guarded = ['id'];

    
    protected $dates = ['deleted_at'];
}
