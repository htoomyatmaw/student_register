<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SelectedBook extends Model
{
    protected $fillable = ['registeration_id','book_id'];
}
