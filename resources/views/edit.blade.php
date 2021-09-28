@extends('master')

@section('content')


<h2>Edit Student</h2>



<form class="form-horizontal" action="{{route('update',$student->id)}}" method="post" > 
  {{csrf_field()}}
  <div class="form-group">
    <label for="registrationno">Registration Number</label>
    <input type="text" class="form-control" placeholder="Enter Registration Number" id="registratin_id" name="registratin_id" value="{{$student->registratin_id}}">
  </div>
  <div class="form-group">
    <label for="name">StudentName:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name"value="{{$student->name}}">
  </div>
  <div class="form-group">
    <label for="deptname">Department Name:</label>
    <input type="text" class="form-control" placeholder="Enter Department Name" id="department_name" name="department_name" value="{{$student->department_name}}">
  </div>
  <div class="form-group">
    <label for="info">Student Information:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info" >{{$student->info}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Edit</button>
</form>
@endsection