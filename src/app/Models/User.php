<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['name'];
    protected $hidden = ['created_at','updated_at','password','remember_token'];

    public function comment()
    {
        return $this->hasMany('App\Models\Comment');
    }
}