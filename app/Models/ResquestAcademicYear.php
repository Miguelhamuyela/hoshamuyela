<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ResquestAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "resquest_academic_years";
    protected $guarded = ['id'];
    public function students()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }
    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }

    public function request_documents()
    {
        return $this->belongsTo(ResquestAcademicYear::class, 'fk_request_documents_id');
    }

    protected $dates = ['deleted_at'];
}
