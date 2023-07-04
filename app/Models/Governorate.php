<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Governorate extends Model
{
    use HasFactory;

    protected $fillable = [ 'governorate', ];

    public function regions (){
        return $this->hasMany('App\Models\Region');
    }

    public function teachers () {
        return $this->hasMany('App\Models\Teacher');
    }












}

