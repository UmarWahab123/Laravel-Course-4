<?php

namespace App\Http\Controllers;

use App\Models\Student;

class StudentConntroller extends Controller
{
    //create a method to fetch all the student record
    public function fetchStudents()
    {
        //1st method to get all the record

        $students = Student::all();
        return $students;

        //2nd method to use where class mean to get a specific record

        // $students = Student::where('id', 33)->get();
        // return $students;

        //3rd method to select a range and get a specific records
        // $students = Student::whereBetween('id', [33, 44])->get();
        // return $students;

        //4th method to order by AScending or descending the with id base

        // $students = Student::whereBetween('id', [33, 44])->orderBy('id', 'DESC')->get();
        // return $students;

    }
}
