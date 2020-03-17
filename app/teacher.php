<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $fillable = ['Firstname','Lastname','Address','Email','DOB','Mobile_no','Password','Image','Qualification'];
}