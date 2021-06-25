@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>{{ __('PUBLIC PROFILE') }}</h1>
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">
            <img class="img-circle elevation-3" style="width:14rem" src="https://lh3.googleusercontent.com/proxy/CYTu2CMxcDbU1-y-Yhz3I1mZBNiA_69yWfgxTcG_WZaJcz0IrSQ3uxuSSQJDqGP475mIuMztoyQtJLsLgBR6eaYFoFrLOvpJTEUpiJHBhb89dcEE4_BCtaSdeT2zp7n1gJOx8xLieVefZbLv72KCWmcy_rNrcXr-0DFQu7zv1GXi_vCKemfuQ4NxfGw0" >
        </div>
        <div class="col-8 container bg-dark p-3" >
            <div class="bg-secondary p-2">
                <h3>{{ __('NAME') }}</h3>
                <H6 style="text-align:center">Juan Carlos</H6>
            </div>   
            <br> 
            <div class="bg-secondary p-2">
                <h3>{{ __('LAST NAME') }}</h3>
                <H6 style="text-align:center">Agustino Montoya</H6>
            </div>
            <br>    
            <div class="bg-secondary p-2">
                <h3>{{ __('Type') }}</h3>
                <H6 style="text-align:center">{{ __('Admin') }}</H6>
            </div>   
            <br> 
            <div class="bg-secondary p-2">
                <h3>{{ __('Address') }}</h3>
                <H6 style="text-align:center">{{ __('Callao City') }}</H6>
            </div>
            <br>    
            <div class="bg-secondary p-2">
                <h3>{{ __('Phone') }}</h3>
                <H6 style="text-align:center">{{ __('45668468') }}</H6>
            </div>
            <br>    
            <div class="bg-secondary p-2">
                <h3>{{ __('e-mail') }}</h3>
                <H6 style="text-align:center">juanito_xd69@mail.com</H6>
            </div>    
        </div>   
    </div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop