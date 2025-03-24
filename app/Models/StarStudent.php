<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StarStudent extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'star_student_academic_years';
    public $guarded = ['id'];
    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }
    public function AcademicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'fk_academic_years_id');
    }
    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'fk_classrooms_id');
    }
    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }
    protected $dates = ['deleted_at'];
}
