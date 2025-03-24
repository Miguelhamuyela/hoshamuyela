<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exam extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'exams';
    public $guarded = ['id'];

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }

    public function class()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }


    public function academic_years()
    {
        return $this->belongsTo(AcademicYear::class, 'fk_academic_years_id');
    }


    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function  classroom()
    {
        return $this->belongsTo(Classroom::class, 'fk_classrooms_id');
    }

    protected $dates = ['deleted_at'];
}

