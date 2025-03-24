<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Classe extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'classes';
    public $guarded = ['id'];

    public function courses()
    {
        return $this->belongsTo(Course::class, 'fk_course_id');
    }


    protected $dates = ['deleted_at'];

}
