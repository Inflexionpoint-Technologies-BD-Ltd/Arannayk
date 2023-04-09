<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Svg;

class Project extends Model
{
    protected $guarded = [];

    public function sdg(){
        return $this->hasMany(\App\Svg::class);
    }
}
