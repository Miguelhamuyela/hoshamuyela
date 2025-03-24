<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Diverse extends Model
{
    use HasFactory;
    public $table = "donations";
    protected $guarded = ['id'];
    
    protected $dates = ['deleted_at'];
}
