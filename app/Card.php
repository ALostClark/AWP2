<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model {

    protected $fillable = ['title', 'body', 'footer', 'link', 'order'];
}
