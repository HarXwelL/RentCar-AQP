@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
    <form action="{{ url('/provider') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('id') }}</span>
        </div>
        <input id="id" name="id" type="text" class="form-control"  placeholder="ID" aria-label="ID" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Brand provider') }}</span>
        </div>
        <input id="brand_provider" name="brand_provider" type="text" class="form-control"  placeholder="brand_provider" aria-label="brand_provider" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Web address') }}</span>
        </div>
        <input id="web_address" name="web_address" type="text" class="form-control"  placeholder="web_address" aria-label="web_address" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Phone') }}</span>
        </div>
        <input id="phone" name="phone" type="text" class="form-control"  placeholder="phone" aria-label="phone" aria-describedby ="basic-addon1">
      </div> 
        <button type="submit" class="float-right btn btn-success">{{ __('Add') }}</button>
        <button class="float-right btn btn-info">{{ __('Report') }}</button>
    </form>
        <a href="/provider" class="float-right btn btn-primary">{{ __('Cancel') }}</a>
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