<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AppetizerAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "appetizer_academic_years";
    protected $guarded = ['id'];
    public function rectors()
    {
        return $this->belongsTo(Rector::class, 'fk_rectors_id');
    }
    public function partners()
    {
        return $this->belongsTo(Partner::class, 'fk_partners_id');
    }
    protected $dates = ['deleted_at'];
}
