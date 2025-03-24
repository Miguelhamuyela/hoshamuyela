<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AcademicYearSubject extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'academic_year_subjects';
    public $guarded = ['id'];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function AcademicYear()
    {
        return $this->belongsTo(AcademicYear::class, 'fk_academic_years_id');
    }

    protected $dates = ['deleted_at'];
}
