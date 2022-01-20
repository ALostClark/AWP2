<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['courseID', 'study_period', 'title', 'description', 'result', 'start_date', 'end_date'];

    public function studyPeriod() {
        return $this->belongsTo('App\StudyPeriod', 'study_period');
    }
}
