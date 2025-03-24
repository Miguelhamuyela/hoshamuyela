<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TeacherExam extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'teacher_exames';
    public $guarded = ['id'];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'fk_teachers_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }
    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classes_id');
    }


    protected $dates = ['deleted_at'];
}
