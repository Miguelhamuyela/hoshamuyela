<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalaryAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'salary_academic_years';
    public $guarded = ['id'];
    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }
    protected $dates = ['deleted_at'];
}
