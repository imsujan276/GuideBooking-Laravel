<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GuideFeedback extends Model
{
    protected $table = 'guide_feedback';

    protected $fillable = [
        'from', 
        'to', 
        'rate',
        'feedback',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
