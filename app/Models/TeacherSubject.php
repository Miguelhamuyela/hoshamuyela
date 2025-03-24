<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherSubject extends Model
{
    use HasFactory;
    use SoftDeletes ;

    protected $table = 'teacher_subjects';
    public $guarded = ['id'];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function academic_livels()
    {
        return $this->belongsTo(AcademicLivel::class, 'fk_academic_livels_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }

    public function classrooms()
    {
        return $this->belongsTo(Classroom::class, 'fk_classrooms_id');
    }

    protected $dates = ['deleted_at'];

}
