<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stack extends Model
{
    public function users(){
        return $this->belongsToMany(User::class, 'user_stack', 'stack_id', 'user_id')->withPivot('level','years');
    }

}
