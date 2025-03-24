<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = 'courses';
    public $guarded = ['id'];

    public function users()
    {
        return $this->belongsTo(User::class, 'fk_users_id');
    }

    public function departaments()
    {
        return $this->belongsTo(Departament::class, 'fk_departaments_id');
    }
    protected $dates = ['deleted_at'];
}
