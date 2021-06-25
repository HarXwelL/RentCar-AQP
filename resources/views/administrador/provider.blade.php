@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Provider</h1>
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
    <form action="/administrador/provider" method="POST">
    @csrf
    @method('PUT')
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">id</span>
      </div>
      <input type="text" class="form-control" value="{{$provider->id}}" placeholder="id" aria-label="id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Brand provider') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$provider->brand_provider}}" placeholder="brand_provider" aria-label="brand_provider" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Web address') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$provider->web_address}}" placeholder="web_address" aria-label="web_address" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Phone') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$provider->phone}}" placeholder="phone" aria-label="phone" aria-describedby="basic-addon1">
      </div>
      <button href="/administrador/provider" class="float-right btn btn-primary">{{ __('Cancel') }}</button>
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
      <th scope="col">brand_provider</th>
      <th scope="col">web_address</th>
      <th scope="col">phone</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($providers as $provider)
      <tr>
        <td>{{$provider->id}}</td>
        <td>{{$provider->brand_provider}}</td>
        <td>{{$provider->web_address}}</td>
        <td>{{$provider->phone}}</td>
        <td>
          <form action="{{ route ('provider.destroy',$provider->id)}}" method="POST">
            <button href="/administrador/{{ $provider->id }}" class="btn btn-primary">{{ __('Edit') }}</button>
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