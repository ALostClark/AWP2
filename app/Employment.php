<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $fillable = ['title', 'location', 'description', 'start_date', 'end_date', 'reference', 'reason_forL'];

    public function location() {
        return $this->belongsTo('App\Location', 'location');
    }

}
