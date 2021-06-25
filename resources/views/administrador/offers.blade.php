@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Offers</h1>
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
    <form action="/administrador/offers" method="POST">
    @csrf
    @method('PUT')
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">id</span>
      </div>
      <input type="text" class="form-control" value="{{$offer->id}}" placeholder="id" aria-label="id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Provider id') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$offer->provider_id}}" placeholder="provider_id" aria-label="provider_id" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Offer name') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$offer->offer_name}}" placeholder="offer_name" aria-label="offer_name" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Date') }}</span>
      </div>
      <input type="date" class="form-control" value="{{$offer->date}}" placeholder="date" aria-label="date" aria-describedby="basic-addon1">
      </div>
      <div class="input-group mb-3">
      <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Discount') }}</span>
      </div>
      <input type="text" class="form-control" value="{{$offer->discount}}" placeholder="discount" aria-label="discount" aria-describedby="basic-addon1">
      </div>
      <button href="/administrador/offer" class="float-right btn btn-primary">{{ __('Cancel') }}</button>
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
      <th scope="col">offer_name</th>
      <th scope="col">date</th>
      <th scope="col">discount</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  @foreach ($offers as $offer)
      <tr>
        <td>{{$offer->id}}</td>
        <td>{{$offer->provider_id}}</td>
        <td>{{$offer->offer_name}}</td>
        <td>{{$offer->date}}</td>
        <td>{{$offer->discount}}</td>
        <td>
          <form action="{{ route ('offer.destroy',$offer->id)}}" method="POST">
            <button href="/administrador/{{ $offer->id }}" class="btn btn-primary">{{ __('Edit') }}</button>
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