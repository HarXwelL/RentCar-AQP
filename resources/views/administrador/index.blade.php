@extends('adminlte::page')

@section('title', 'RentaCAR')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<head>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>
    <div class="row">
        <div class="col">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Usuarios Registrados</span>
                    <span class="info-box-number">100</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div> 
        <div class="col">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-green"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de autos</span>
                    <span class="info-box-number">100</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div>   
        <div class="col">
            <div class="info-box">
                <!-- Apply any bg-* class to to the icon to color it -->
                <span class="info-box-icon bg-orange"><i class="fa fa-star-o"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de marcas</span>
                    <span class="info-box-number">100</span>
                </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
        </div> 
        <br> 
    <section class="container">  
        <div class="row justify-content-between">
            <div class="col">
                <H3>TOP 10 USUARIOS</H3>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        <tr>
                            <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div>  
            <div class="col">
                <h3>TOP 10 PROOVEDORES</h3>

                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                        <tr>
                            <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td colspan="2">Larry the Bird</td>
                        <td>@twitter</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">10</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                        </tr>
                    </tbody>
                </table>
            </div> 
               
        </div>
        <div class="container-fluid bg-dark" style="width: 30rem">
        </div>
    </section>  
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop