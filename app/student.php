<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $fillable = ['First_name','Last_name','Address','Email','Mobile_No','Password','Dob','image'];
}
