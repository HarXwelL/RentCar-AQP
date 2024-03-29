@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
    <form action="{{ url('/Rental/'.$rental->id) }}" method="POST">
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
        <input id="id" name="id" type="text" value="{{ $rental->id }}" class="form-control"  placeholder="ID" aria-label="ID" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('User id') }}</span>
        </div>
        <input id="user_id" name="user_id" type="text" value="{{ $rental->user_id }}" class="form-control"  placeholder="user_id" aria-label="user_id" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Auto id') }}</span>
        </div>
        <input id="auto_id" name="auto_id" type="text" value="{{ $rental->auto_id }}" class="form-control"  placeholder="auto_id" aria-label="auto_id" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Payment type') }}</span>
        </div>
        <input id="payment_type" name="payment_type" value="{{ $rental->payment_type }}" type="text" class="form-control"  placeholder="payment_type" aria-label="payment_type" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Start date') }}</span>
        </div>
        <input id="start_date" name="start_date" type="date" value="{{ $rental->start_date }}" class="form-control"  placeholder="start_date" aria-label="start_date" aria-describedby ="basic-addon1">
      </div>
        <button type="submit" class="float-right btn btn-success">{{ __('Edit') }}</button>
        
    </form>
        <a href="/Rental" class="mr-2 float-right btn btn-primary">{{ __('Cancel') }}</a>
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
        $('#rental').DataTable({
          "lengthMenu":[[5,10,50,1],[5,10,50,'All']]
        });
    });
    </script>
@stop    
 