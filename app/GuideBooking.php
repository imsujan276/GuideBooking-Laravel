<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class GuideBooking extends Model
{
    protected $table = 'guide_booking';

    protected $fillable = [
        'from', 
        'to', 
        'status',
        'description', 
        'tour_date',
        'days', 
        'time', 
        'number_of_people', 
        'type_of_tour'
    ];
    
    protected $appends = array('fromname', 'fromusername', 'toname', 'tousername');

    public function getFromnameAttribute(){
        return User::find($this->from)->name;
    }
    public function getFromusernameAttribute(){
        return User::find($this->from)->username;
    }
    public function getTonameAttribute(){
        return User::find($this->to)->name;
    }
    public function getTousernameAttribute(){
        return User::find($this->to)->username;
    }
}
