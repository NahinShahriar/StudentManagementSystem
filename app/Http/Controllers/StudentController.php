<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\student ;

class StudentController extends Controller
{
    public function index()
    
    {
        $students=student::all();
        return view('index')->with('students',$students);
    }
    public function create()
    
    {
       
        return view('create');
    }
    public function edit($id)
    
    {
        $student=student::find($id);

       
        return view('edit')->with('student',$student);
    }
    public function update( Request $request, $id)
    
    {
       $student= student::find($id);
       $student->name=$request->name;
       $student->department_name=$request->department_name;
       $student->registratin_id=$request->registratin_id;
       $student->info=$request->info;
       $student->save();
     return redirect()->route('index');
        
    }
    public function store( Request $request)
    
    {
       
      // dd('submitted');

      $student=new student();
      $student->name=$request->name;
      $student->department_name=$request->department_name;
      $student->registratin_id=$request->registratin_id;
      $student->info=$request->info;
      $student->save();
    return redirect()->route('index');

    }
    public function delete($id)
    
    {
        $student=student::find($id);
        $student->delete();
        return redirect()->route('index');

       
     
    }
}
