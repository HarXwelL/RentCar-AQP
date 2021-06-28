@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
    <form action="{{ url('/auto/'.$auto->id) }}" method="post">
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
        <input id="id" name="id" type="text" value="{{ $auto->id }}" class="form-control"  placeholder="ID" aria-label="ID" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Provider id') }}</span>
        </div>
        <input id="provider_id" name="provider_id" type="text" value="{{ $auto->provider_id }}" class="form-control"  placeholder="provider_id" aria-label="provider_id" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Color') }}</span>
        </div>
        <input id="color" name="color" type="text" value="{{ $auto->color }}" class="form-control"  placeholder="color" aria-label="color" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Capacity') }}</span>
        </div>
        <input id="capacity" name="capacity" type="text" value="{{ $auto->capacity }}" class="form-control"  placeholder="capacity" aria-label="capacity" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Plate number') }}</span>
        </div>
        <input id="plate_no" name="plate_no" type="text" value="{{ $auto->plate_no }}" class="form-control"  placeholder="plate_no" aria-label="plate_no" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Price') }}</span>
        </div>
        <input id="price" name="price" type="text" value="{{ $auto->price }}" class="form-control"  placeholder="price" aria-label="price" aria-describedby ="basic-addon1">
      </div>
        <button type="submit" class="float-right btn btn-success">{{ __('Edit') }}</button>
        
    </form>
        <a href="/auto" class="mr-2 float-right btn btn-primary">{{ __('Cancel') }}</a>
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
        $('#auto').DataTable({
          "lengthMenu":[[5,10,50,1],[5,10,50,'All']]
        });
    });
    </script>
@stop