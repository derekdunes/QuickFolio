<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    public function template(){

        return $this->belongsTo(Template::class, 'plan_id');

    }
}
