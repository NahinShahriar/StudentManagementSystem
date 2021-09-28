
@extends('master')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Registration Number</th>
      <th scope="col">Name</th>
      <th scope="col">Depatment Name</th>
      <th scope="col">Information</th>
    </tr>
  </thead>
  <tbody>
    @php $i=0; @endphp
    @foreach ($students as $student)
    @php $i++ @endphp
    <tr>
    <td>
    {{$i}}
    </td>
    <td>
    {{$student->registratin_id}}
    </td>
    <td>
    {{$student->name}}
    </td>
    <td>
    {{$student->department_name}}
    </td>
    <td>
    {{$student->info}}
    </td>

    <td><a href="{{route('edit',$student->id)}}" class="btn btn-success">Edit</a>
  
  <form action="{{route('delete',$student->id)}}" method="post">
    {{csrf_field()}}

<input type="submit" class="btn btn-danger" value="delete">

  </form>
  
  
  </td>
    </tr>
@endforeach

  
  </tbody>
</table>
@endsection



