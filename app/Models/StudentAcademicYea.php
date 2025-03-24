<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentAcademicYea extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'student_academic_years';
    public $guarded = ['id'];

    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
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
