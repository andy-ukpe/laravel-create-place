<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function students(){
      // $students= [
      //   [
      //     'name'=>'Carlo',
      //     'surname'=>'Bianchi',
      //     'mark'=>10,
      //   ],
      //   [
      //     'name'=>'mario',
      //     'surname'=>'Rossi',
      //     'mark'=>6,
      //   ],
      //   [
      //     'name'=>'Ernesto',
      //     'surname'=>'verdi',
      //     'mark'=>5,
      //   ],
      // ];

      $student = Student::all();

      // vardum ->dd($students);
      return view('students', compact('student')
      // [
      //   'teacher'=>'Tonino',
      //   'age_teacher'=>32,
      //
      // ]
      );
    }
}
