<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'teachers';
    public $guarded = ['id'];



    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }


    public function Subjects()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }


    public function academic_years()
    {
        return $this->belongsTo(AcademicYear::class, 'fk_academic_years_id');
    }

    public function AcademicLivel()
    {
        return $this->belongsTo(AcademicLivel::class, 'fk_academic_livels_id');
    }


    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }


    public function users()
    {
        return $this->belongsTo(User::class, 'fk_users_id');
    }
    public function departaments()
    {
        return $this->belongsTo(Departament::class, 'fk_departaments_id');
    }

    protected $dates = ['deleted_at'];

}
