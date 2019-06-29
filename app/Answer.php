<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    public function question(){
    	$this->belongsTo('App\Question');
    }
    public function category(){
    	$this->belongsTo('App\Category');
    }
    protected $fillable = [
        'question_id',
    ];
}
