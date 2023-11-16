<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Http\Requests\StudentFormRequest;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function store(StudentFormRequest $request){
           
        $data = $request->validated();

        $student = new Student;


        $student->id=$data['id'];
        $student->first_name=$data['firstname'];
        $student->last_name=$data['lastname'];
        $student->age=$data['age'];

        $student->save();

    }

}
