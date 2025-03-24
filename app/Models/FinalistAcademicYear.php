<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FinalistAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "finalist_academic_years";
    protected $guarded = ['id'];
    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }
    public function aproveitaments()
    {
        return $this->belongsTo(Aproveitament::class, 'fk_aproveitaments_id');
    }
    
    protected $dates = ['deleted_at'];
}
