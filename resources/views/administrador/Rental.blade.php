@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Rental</h1>
@stop

@section('content')
<head>
<a href="Rental/create" class="btn btn-info">Create</a>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head> 
  <br>
  <br>
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
          <a href="{{ url('/Rental/'.$rental->id.'/edit') }}" class="btn btn-primary">{{ __('Edit') }}</a>
            <form action="{{ url('/Rental/'.$rental->id ) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
            </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
  {{ $rentals->links() }}

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