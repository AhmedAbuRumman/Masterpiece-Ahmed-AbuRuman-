<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $guarded = [];

    public function meals()
    {
        return $this->belongsToMany('App\Meal','item_meal');
    }

}
