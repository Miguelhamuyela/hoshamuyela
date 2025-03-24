<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SeminarAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'seminar_academic_years';
    public $guarded = ['id'];
    public function holidays()
    {
        return $this->belongsTo(Holiday::class, 'fk_holidays_id');
    }
    protected $dates = ['deleted_at'];
}
