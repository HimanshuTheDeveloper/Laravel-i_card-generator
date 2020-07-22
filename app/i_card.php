<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class i_card extends Model
{
    //
    protected $fillable = ['name','program', 'student_id', 'dob','address'];
}
