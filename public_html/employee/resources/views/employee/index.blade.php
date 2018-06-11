<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
      <h1 class="text-center">Employee Details</h1>
      <legend></legend>
      <a href="{{ url('/home')}}" class="btn btn-danger text-left">Home</a>
      <a href="{{action('EmployeeController@create')}}" class="btn btn-primary text-left">Add New Employee</a><br><br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Country</th>
        <th>Experience</th>
        <th>Company</th>
        <th>Admin Name</th>
        <th>Admin Address</th>
        <th>Admin Country</th>
      </tr>
    </thead>
    <tbody>
      @foreach($employeeData as $admin)
      <tr>
        <td>{{$admin['id']}}</td>
        <td>{{$admin['name']}}</td>
        <td>{{$admin['address']}}</td>
        <td>{{$admin['country']}}</td>
        <td>{{$admin['experience']}}</td>
        <td>{{$admin['company']}}</td>
        <td>{{$admin['admin']['name']}}</td>
        <td>{{$admin['admin']['address']}}</td>
        <td>{{$admin['admin']['country']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
