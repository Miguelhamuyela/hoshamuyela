<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Province extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $table = "provinces";
    protected $guarded = ['id'];

    public function municipies()
    {
        return $this->belongsTo(Municipe::class,'fk_municipes_id');
    }
    protected $dates = ['deleted_at'];
}
