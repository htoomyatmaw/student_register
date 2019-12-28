<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable =['rollno','name','student_nrc','father_name','father_nrc','dob','phone','student_email','address','profile','year_id','book_id','major_id','activity_id'];
}
