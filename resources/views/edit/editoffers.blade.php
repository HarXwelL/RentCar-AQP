@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
    <form action="{{ url('/Offers/'.$offer->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}

    @if(count($errors)>0)
    <div class="alert alert-danger" role="alert">
      <ul>
          @foreach( $errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
      </ul>
    </div>
    @endif
    
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('id') }}</span>
        </div>
        <input id="id" name="id" type="text" value="{{ $offer->id }}" class="form-control"  placeholder="ID" aria-label="ID" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Provider id') }}</span>
        </div>
        <input id="provider_id" name="provider_id" type="text" value="{{ $offer->provider_id }}" class="form-control"  placeholder="provider_id" aria-label="provider_id" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Offer name') }}</span>
        </div>
        <input id="offer_name" name="offer_name" type="text" value="{{ $offer->offer_name }}" class="form-control"  placeholder="offer_name" aria-label="offer_name" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Date') }}</span>
        </div>
        <input id="date" name="date" type="date" value="{{ $offer->date }}" class="form-control"  placeholder="date" aria-label="date" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Discount') }}</span>
        </div>
        <input id="discount" name="discount" type="text" value="{{ $offer->discount }}" class="form-control"  placeholder="discount" aria-label="discount" aria-describedby ="basic-addon1">
      </div>
        <button type="submit" class="float-right btn btn-success">{{ __('Edit') }}</button>
        
    </form>
        <a href="/Offers" class="mr-2 float-right btn btn-primary">{{ __('Cancel') }}</a>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#offer').DataTable({
          "lengthMenu":[[5,10,50,1],[5,10,50,'All']]
        });
    });
    </script>
@stop