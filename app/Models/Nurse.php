<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nurse extends Model
{
    use HasFactory;
    public $table = "nurses";
    protected $guarded = ['id'];
    protected $dates = ['deleted_at'];


}
