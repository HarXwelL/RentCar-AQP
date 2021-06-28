@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>{{ __('Dashboard') }}</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <table class="table table-dark table-striped">
                <thead>
                    <tr>
                    <th scope="col">Id Auto</th>
                    <th scope="col">provider_id</th>
                    <th scope="col">color</th>
                    <th scope="col">capacity</th>
                    <th scope="col">plate_no</th>
                    <th scope="col">price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($autos as $auto)
                    <tr>
                        <td>{{$auto->id}}</td>
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
    </div>
</div>
@endsection
