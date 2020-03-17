<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class complain extends Model
{
    protected $fillable = ['Stu_ID','Tutor_ID','Sub','Msg','SendBy'];
}
