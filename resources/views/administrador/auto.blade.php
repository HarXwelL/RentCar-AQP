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
 <a href="auto/create" class="btn btn-info">Create</a>
 <br>
 <br>
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
  @foreach($autos as $auto)
      <tr>
        <td>{{$auto->id}}</td>
        <td>{{$auto->provider_id}}</td>
        <td>{{$auto->color}}</td>
        <td>{{$auto->capacity}}</td>
        <td>{{$auto->plate_no}}</td>
        <td>{{$auto->price}}</td>
        <td>
            <a href="{{ url('/auto/'.$auto->id.'/edit') }}" class="btn btn-primary">{{ __('Edit') }}</a>
            <form action="{{ url('/auto/'.$auto->id ) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
      
        </td>
      </tr>
  @endforeach
  </tbody>
</table>
{{ $autos->links() }}

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