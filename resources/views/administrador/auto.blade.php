@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Auto</h1>
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
    <form action="/administrador/auto" method="POST">
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">ID</span>
      </div>
      <input type="text" class="form-control" value="{{$auto->id}}" placeholder="id" aria-label="id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Provider id') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$auto->provider_id}}" placeholder="provider_id" aria-label="provider_id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Color') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$auto->color}}" placeholder="color" aria-label="color" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Capacity') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$auto->capacity}}" placeholder="capacity" aria-label="capacity" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Plate Number') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$auto->plate_no}}" placeholder="plate_no" aria-label="plate_no" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Price') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$auto->price}}" placeholder="price" aria-label="price" aria-describedby="basic-addon1">
      </div>
      <button href="/administrador/auto" class="float-right btn btn-primary">{{ __('Cancel') }}</button>
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
      <th scope="col">provider_id</th>
      <th scope="col">color</th>
      <th scope="col">capacity</th>
      <th scope="col">plate_no</th>
      <th scope="col">price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($autos as $auto)
      <tr>
        <td>{{$auto->id}}</td>
        <td>{{$auto->provider_id}}</td>
        <td>{{$auto->color}}</td>
        <td>{{$auto->capacity}}</td>
        <td>{{$auto->plate_no}}</td>
        <td>{{$auto->price}}</td>
        <td>
          <form action="{{ route ('auto.destroy',$auto->id)}}" method="POST">
            <button href="/administrador/{{ $auto->id }}" class="btn btn-primary">{{ __('Edit') }}</button>
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