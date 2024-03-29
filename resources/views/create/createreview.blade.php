@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
    <form action="{{ url('/review') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('id') }}</span>
        </div>
        <input id="id" name="id" type="text" class="form-control"  placeholder="ID" aria-label="ID" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('User id') }}</span>
        </div>
        <input id="user_id" name="user_id" type="text" class="form-control"  placeholder="user_id" aria-label="user_id" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Rental id') }}</span>
        </div>
        <input id="rental_id" name="rental_id" type="text" class="form-control"  placeholder="rental_id" aria-label="rental_id" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Qualification') }}</span>
        </div>
        <input id="qualification" name="qualification" type="text" class="form-control"  placeholder="qualification" aria-label="qualification" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Comment') }}</span>
        </div>
        <input id="comment" name="comment" type="text" class="form-control"  placeholder="comment" aria-label="comment" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Date') }}</span>
        </div>
        <input id="date" name="date" type="date" class="form-control"  placeholder="date" aria-label="date" aria-describedby ="basic-addon1">
      </div>
          <button type="submit" class="float-right btn btn-success">{{ __('Add') }}</button>
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
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></SCRipt>
    <script>
    $(document).ready(function() {
        $('#review').DataTable({
          "lengthMenu":[[5,10,50,1],[5,10,50,'All']]
        });
    });
    </script>
@stop