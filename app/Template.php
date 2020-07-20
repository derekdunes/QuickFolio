<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
	
    public function users(){
        return $this->hasMany(User::class, 'template_id');
    }
}
