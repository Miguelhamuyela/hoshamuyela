<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Tenantable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubjectAcademicYear extends Model
{
    use HasFactory;
    use SoftDeletes ;
    protected $table = 'student_academic_years';
    public $guarded = ['id'];


    public function subjects()
    {
        return $this->belongsTo(Subject::class, 'fk_subjects_id');
    }

    protected $dates = ['deleted_at'];
}
