<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
