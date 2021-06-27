<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserMhs extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','name','email','email_verivited_at','password','remember_token'];
    public    $timestamps = false;
}
