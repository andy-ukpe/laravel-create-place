<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //
    protected $filable =[
      'name',
      'surname',
      'mark',
    ];
};
