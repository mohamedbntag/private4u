<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        '', '', '', '', '', '', '', '', '', '', '', '',
    ];

    public function governorats () {
        return $this->belongsTo('App\Models\Governorate');
    }
}
