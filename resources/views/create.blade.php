@extends('master')
@section('title')
Create student|Student Management
@endsection
@section('content')


<h2>Insert Student</h2>



<form class="form-horizontal" action="{{route('store')}}" method="post" > 
  {{csrf_field()}}
  <div class="form-group">
    <label for="registrationno">Registration Number</label>
    <input type="text" class="form-control" placeholder="Enter Registration Number" id="registratin_id" name="registratin_id">
  </div>
  <div class="form-group">
    <label for="name">StudentName:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="deptname">Department Name:</label>
    <input type="text" class="form-control" placeholder="Enter Department Name" id="department_name" name="department_name">
  </div>
  <div class="form-group">
    <label for="info">Student Information:</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="info"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  
</form>
@endsection