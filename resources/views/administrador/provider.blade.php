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
  <a href="provider/create" class="btn btn-info">Create</a>
 <br>
 <br>
  <table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Brand_provider</th>
      <th scope="col">Web_address</th>
      <th scope="col">Phone</th>
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
            <a href="{{ url('/provider/'.$provider->id.'/edit') }}" class="btn btn-primary float-right">{{ __('Edit') }}</a>
            <form action="{{ url('/provider/'.$provider->id ) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE') }}
            <input class="mr-2 btn btn-danger float-right" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $providers->links() }}
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