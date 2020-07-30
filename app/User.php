<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function stacks(){
        return $this->belongsToMany( Stack::class, 'user_stack','user_id','stack_id')->withPivot('level','years');
    }

    public function projects(){
        return $this->hasMany(Project::class, 'user_id');
    }

    public function payment(){
        return $this->hasOne(Payment::class, 'id');
    }

    public function template(){

        return $this->hasOne(Template::class, 'id');
    
    }

}
