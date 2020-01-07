<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Book;
use App\Activity;
use App\Year;
use App\Major;

class Registeration extends Model
{
     
    protected $fillable = [
        'rollno',
        'name',
        'student_nrc',
        'father_name',
        'father_nrc',
        'dob',
        'phone',
        'student_email',
        'address',
        'profile',
        'register_fee',
        'user_id',
        'year_id',
        'major_id',

    ];

  public function books(){
      return $this->belongsToMany('App\Book','SelectedBook');
  }

  public function activities(){
      return $this->belongsToMany('App\Activity','SelectedActivity');
  }

  public function year(){
      return $this->belongsTo('App\Year');

  }

  public function majors(){
    return $this->hasOne('App\Major');
    
}

}
