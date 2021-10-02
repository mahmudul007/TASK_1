<?php

namespace App\Http\Controllers;
use  App\Models\Student;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create(){
        return view('pages.students.create');
    }
    public function createSubmit(Request $request){

    
        $this->validate(
            $request,
            [
                'name'=>'required',
                'id'=>'required',
                'dob'=>'required',
                'phone'=>'required'
            ],
            [
                'name.required'=>'please put your name'
            ]
          
            );
    
  
$var = new Student();
$var->name=$request->name;
$var->s_id=$request->id;
$var->email=$request->email;
$var->phone=$request->phone;
$var->dob=$request->dob;
$var->save();


return "ok";


    }
    public function list(){
    
    $students=Student::all();
      return view('pages.students.list')->with('students',$students);
        
    }
    public function edit(Request $request)
    {
    $id= $request->id;
    $student=Student::where('id',$id)->get();
    return $student;
    }
}
