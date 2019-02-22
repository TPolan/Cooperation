<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function asnwer()
    {
        return $this->belongsTo('App\Answer');
    }
}
