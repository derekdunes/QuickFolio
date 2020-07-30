<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
	
    public function plan(){

        return $this->hasOne(Plan::class, 'id');

    }

    public function user(){

    	return $this->belongsTo(User::class, 'template_id');
    
    }
    
}
