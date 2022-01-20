<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    protected $fillable = ['name','address','description'];

    public function studyPeriod() {
        return $this->hasMany('App\StudyPeriod');
    }

    public function employment() {
        return $this->hasMany('App\Employment');
    }

}
