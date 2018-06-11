<!-- index.blade.php -->
@extends('master')
@section('content')
  <div class="container">
      <h1 class="text-center">Admin Details</h1>
      <legend></legend>
      <a href="{{action('AdminController@create')}}" class="btn btn-primary text-left">Add New Admin</a><br><br>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Country</th>
      </tr>
    </thead>
    <tbody>
      @foreach($admins as $admin)
      <tr>
        <td>{{$admin['id']}}</td>
        <td>{{$admin['name']}}</td>
        <td>{{$admin['address']}}</td>
        <td>{{$admin['country']}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
@endsection
