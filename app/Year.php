<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = ['name','fee'];

    public function years(){
        return $this->hasOne('App\Year');
  
    }
}
