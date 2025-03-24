<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    public $table = "doctors";
    protected $guarded = ['id'];


    protected $dates = ['deleted_at'];

    
    public function specialtie()
    {
        return $this->belongsTo(DoctorSpecialtie::class,'fk_doctorSpecialties_id');
    }
}
