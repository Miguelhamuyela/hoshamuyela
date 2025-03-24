<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StudentsAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'students_academic_year';
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
