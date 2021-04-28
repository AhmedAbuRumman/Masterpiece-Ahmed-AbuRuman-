<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany('App\Item','item_meal');
    }
}
