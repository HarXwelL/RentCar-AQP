@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Rental</h1>
@stop

@section('content')
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head> 
<section>
    <form action="/administrador/rental" method="POST">
    @csrf
    @method('PUT')
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('id') }}</span>
      </div>
      <input id="id" type="text" class="form-control" value="{{$rental->id}}" placeholder="ID" aria-label="ID" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('User id') }}</span>
      </div>
      <input id="user_id" type="text" class="form-control" value="{{$rental->user_id}}" placeholder="user_id" aria-label="user_id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Auto id') }}</span>
      </div>
      <input id="auto_id" type="text" class="form-control" value="{{$rental->auto_id}}" placeholder="auto_id" aria-label="auto_id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Payment type') }}</span>
      </div>
      <input id="payment_type" type="text" class="form-control" value="{{$rental->payment_type}}" placeholder="payment_type" aria-label="payment_type" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Start date') }}</span>
      </div>
      <input id="start_date" type="date" class="form-control" value="{{$rental->start_date}}" placeholder="start_date" aria-label="start_date" aria-describedby="basic-addon1">
      </div>
      <button href="/admin/rental" class="float-right btn btn-primary">{{ __('Cancel') }}</button>
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
      <th scope="col">user_id</th>
      <th scope="col">auto_id</th>
      <th scope="col">payment_type</th>
      <th scope="col">start_date</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($rentals as $rental)
      <tr>
        <td>{{$rental->id}}</td>
        <td>{{$rental->user_id}}</td>
        <td>{{$rental->auto_id}}</td>
        <td>{{$rental->payment_type}}</td>
        <td>{{$rental->start_date}}</td>
        <td>
          <form action="{{ route ('rental.destroy',$rental->id)}}" method="POST">
            <button href="/administrador/{{ $rental->id }}" class="btn btn-primary">{{ __('Edit') }}</button>
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