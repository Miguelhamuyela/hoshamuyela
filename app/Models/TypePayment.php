<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypePayment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'type_payments';
    public $guarded = ['id'];
    protected $dates = ['deleted_at'];
}
