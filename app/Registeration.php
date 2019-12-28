<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
