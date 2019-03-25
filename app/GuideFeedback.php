<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class GuideFeedback extends Model
{
    protected $table = 'guide_feedback';

    protected $fillable = [
        'from', 
        'to', 
        'rate',
        'feedback',
        'for',
    ];
    protected $appends = array('username', 'user');

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function getUserAttribute(){
        return User::find($this->from)->name;
    }
    public function getUsernameAttribute(){
        return User::find($this->from)->username;
    }

}
