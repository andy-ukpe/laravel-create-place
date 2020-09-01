<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function students(){
      $students= [
        [
          'name'=>'Carlo',
          'surname'=>'Bianchi',
          'mark'=>10,
        ],
        [
          'name'=>'mario',
          'surname'=>'Rossi',
          'mark'=>6,
        ],
        [
          'name'=>'Ernesto',
          'surname'=>'verdi',
          'mark'=>5,
        ],
      ];

      // vardum ->dd($students);
      return view('students', compact('students'), [
        'teacher'=>'Tonino',
        'age_teacher'=>32,

      ]);
    }
}
