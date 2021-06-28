@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
                <h2 class="text-center" ><b>Autos Disponibles</b></h2>
                
                <br>
                
        </div>
        <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id Auto</th>
                    <th scope="col">Provider_id</th>
                    <th scope="col">Color</th>
                    <th scope="col">Capacity</th>
                    <th scope="col">Plate_no</th>
                    <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($autos as $auto)
                    <tr>
                        <td><a href="{{ url('/autos/alquiler') }}">{{$auto->id}}</a></td>
                        <td>{{$auto->provider_id}}</td>
                        <td>{{$auto->color}}</td>
                        <td>{{$auto->capacity}}</td>
                        <td>{{$auto->plate_no}}</td>
                        <td>{{$auto->price}}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                {{ $autos->links() }}
                <br>
                <br>
    </div>
</div>
@endsection
