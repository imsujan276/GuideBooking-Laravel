<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class TouristArea extends Model
{
    protected $table = 'tourist_area';

    protected $fillable = [
        'title', 
        'description', 
        'image',
        'city', 
        'country', 
        'user_id'
    ];

    protected $appends = array('username', 'user');

    public function getUserAttribute(){
        return User::find($this->user_id)->name;
    }
    public function getUsernameAttribute(){
        return User::find($this->user_id)->username;
    }

    public function user(){
        return $this->hasOne('App\User');
    }
}
