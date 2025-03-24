<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentAcademicYear extends Model
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

    protected $dates = ['deleted_at'];

}
