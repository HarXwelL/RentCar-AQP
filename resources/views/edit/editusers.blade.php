@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Edit</h1>
@stop

@section('content')
    <form action="{{ url('/Users/'.$user->id) }}" method="POST">
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
        <input id="id" name="id" type="text" value="{{ $user->id }}" class="form-control"  placeholder="ID" aria-label="ID" aria-describedby ="basic-addon1">
      </div>
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Name') }}</span>
        </div>
        <input id="name" name="name" type="text" value="{{ $user->name }}" class="form-control"  placeholder="name" aria-label="name" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('User type') }}</span>
        </div>
        <input id="user_type" name="user_type" type="text" value="{{ $user->user_type }}" class="form-control"  placeholder="user_type" aria-label="user_type" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Email') }}</span>
        </div>
        <input id="email" name="email" type="text" value="{{ $user->email }}" class="form-control"  placeholder="email" aria-label="email" aria-describedby ="basic-addon1">
      </div> 
      <div class="input-group mb-3">
        <div class="input-group-prepend">
          <span class="input-group-text" id="basic-addon1">{{ __('Password') }}</span>
        </div>
        <input id="password" name="password" type="text" value="{{ $user->password }}" class="form-control"  placeholder="password" aria-label="password" aria-describedby ="basic-addon1">
      </div>
        <button type="submit" class="float-right btn btn-success">{{ __('Edit') }}</button>
        
    </form>
        <a href="/Users" class="float-right btn btn-primary">{{ __('Cancel') }}</a>
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
        $('#user').DataTable({
          "lengthMenu":[[5,10,50,1],[5,10,50,'All']]
        });
    });
    </script>
@stop