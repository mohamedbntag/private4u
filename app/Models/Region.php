<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    protected $fillable = ['governorate_id', 'region',];

    public function governorates () {
        return $this->belongsTo('App\Models\Governorate');
    }






}
