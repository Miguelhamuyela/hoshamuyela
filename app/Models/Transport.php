<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transport extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "transports";
    protected $guarded = ['id'];

    
    protected $dates = ['deleted_at'];
}
