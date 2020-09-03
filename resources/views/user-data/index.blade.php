@extends('layout.main')
<!-- Kalo ada section dengan nama title isi dengan cobaLaravel -->
@section('title', 'Pet Data')

<!-- Lebih dari 1 baris pakai tutup -->
@section('container')
<div class="container mt-5 mb-5">
<h2 class="text-center mb-3">Users Data</h2>
<a href="{{url('/user-data/add-admin')}}"> <button class="btn btn-success mb-3">Add Admin</button></a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">User Id</th>
      <th scope="col">Config</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <th>001</th>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <th>001</th>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <th>001</th>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <th>001</th>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
  </tbody>
</table>
</div>
@endsection
