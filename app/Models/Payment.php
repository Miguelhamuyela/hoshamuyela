<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{

    use HasFactory;
    use SoftDeletes;
    protected $table = 'payments';
    public $guarded = ['id'];


    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }


    public function academic_livels()
    {
        return $this->belongsTo(AcademicLivel::class, 'fk_academic_livels_id');
    }


    public function academic_years()
    {
        return $this->belongsTo(AcademicYear::class, 'fk_academic_years_id');
    }


    public function classes()
    {
        return $this->belongsTo(Classe::class, 'fk_classe_id');
    }


    public function Student()
    {
        return $this->belongsTo(Student::class, 'fk_students_id');
    }


    protected $dates = ['deleted_at'];

}
