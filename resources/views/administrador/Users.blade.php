@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
<head>
<section>
    <form action="/administrador/Users" method="POST">
    @csrf
    @method('PUT')
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">ID</span>
      </div>
      <input type="text" class="form-control"  placeholder="id" aria-label="id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Name') }}</span>
      </div>
      <input type="text" class="form-control"  placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('User type') }}</span>
      </div>
      <input type="text" class="form-control"  placeholder="user_type" aria-label="user_type" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Last name') }}</span>
      </div>
      <input type="text" class="form-control"  placeholder="last_name" aria-label="last_name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Image') }}</span>
      </div>
      <input type="image" class="form-control"  placeholder="image" aria-label="image" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Password') }}</span>
      </div>
      <input type="text" class="form-control"  placeholder="password" aria-label="password" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Address') }}</span>
      </div>
      <input type="text" class="form-control"  placeholder="address"  aria-label="address" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Phone') }}</span>
      </div>
      <input type="text" class="form-control"  placeholder="phone" aria-label="phone" aria-describedby="basic-addon1">
      </div>
      <button href="/administrador/Users" class="float-right btn btn-primary">{{ __('Cancel') }}</button>
      <button type="submit" class="float-right btn btn-success">{{ __('Add') }}</button>
      <button class="float-right btn btn-info">{{ __('Report') }}</button>
    </form>
    <br>
    <br>
</section>  
    <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">name</th>
      <th scope="col">user_type</th>
      <th scope="col">last_name</th>
      <th scope="col">image</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">address</th>
      <th scope="col">phone</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->user_type}}</td>
        <td>{{$user->last_name}}</td>
        <td>{{$user->image}}</td>
        <td>{{$user->email}}</td>
        <td>{{$user->password}}</td>
        <td>{{$user->address}}</td>
        <td>{{$user->phone}}</td>
        <td>
          <form action="{{ route ('user.destroy',$user->id)}}" method="POST">
            <button href="/administrador/{{ $user->id }}" class="btn btn-primary">{{ __('Edit') }}</button>
            <button type="submit" class="btn btn-danger">{{ __('Delete') }}</button>
          </form>  
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></SCRipt>
    <script>
    $(document).ready(function() {
        $('#rental').DataTable({
          "lengthMenu":[[5,10,50,1],[5,10,50,'All']]
        });
    });
    </script>
@stop