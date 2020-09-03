@extends('layout.main')
<!-- Kalo ada section dengan nama title isi dengan cobaLaravel -->
@section('title', 'Home')

<!-- Lebih dari 1 baris pakai tutup -->
@section('container')
<div class="container mt-5 mb-5">
<h2 class="text-center mb-3">Pet Data</h2>
<a href="{{url('pet-data/add-pet')}}"> <button class="btn btn-success mb-3">Add Pet</button></a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Pet Name</th>
      <th scope="col">Pet Type</th>
      <th scope="col">Pet Age</th>
      <th scope="col">Pet Donate Reasons</th>
      <th scope="col">Pet Sex</th>
      <th scope="col">Config</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Leave Country</td>
      <td>Male</td>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Leave Country</td>
      <td>Male</td>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>Leave Country</td>
      <td>Male</td>
      <td><a href="#" class="badge badge-primary mr-3">Edit</a><a href="#" class="badge badge-danger">Delete</a></td>
    </tr>
  </tbody>
</table>
</div>
@endsection
