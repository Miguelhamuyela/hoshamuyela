<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HonorAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "honor_academic_years";
    protected $guarded = ['id'];
    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }
    public function honor_academic_years()
    {
        return $this->belongsTo(HonorAcademicYear::class, 'fk_honor_academic_years_id');
    }
    protected $dates = ['deleted_at'];
}
