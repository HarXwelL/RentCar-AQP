@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
</head>
<body>
<br>
<br>
<br>
<br>
<!--Alquiler-->
<div class="container border border-primary m-10 pb-10">
    @foreach ($autos as $auto)
        <div class="row">
            <div class="col" style="background-color:#E7E8EA">
            <div>
                    <br>
                    <img class="card-img" style="width: 100 rem" src="http://i2.cdn.turner.com/money/dam/assets/130423094442-tesla-model-s-620xa.jpg" alt="">
            </div>
            <div>
                <h3><b>{{ __('I NEED DBS') }}</b></h3>
                <h5> $$$$$ </h5>
            </div>
            <br>
            <button type="button" style="float: right" class="btn btn-success" href="/autos/alquiler">Alquilar</button>
            <br>
            <br>
            </div>
            <div class="col">
            <div class="text-align-left">
                    <br>
                    <h4><b>{{ __('DESCRIPTION') }}</b></h4>
                    <br>
                    <div>
                        <h5 class="text-align-left">{{ __('Provider:') }}</h5>
                        <h6>base de datos </h6>
                    </div>
                    <div>
                        <h5 class="text-align-left">{{ __('Capacity:') }}</h5>
                        <h6>base de datos </h6>
                    </div>
                    <div>
                        <h5 class="text-align-left">{{ __('Color:') }}</h5>
                        <h6>base de datos </h6>
                    </div>
                    <div>
                        <h5 class="text-align-left">{{ __('Plate number') }}</h5>
                        <h6>base de datos </h6>
                    </div>
                    <div>
                        <h5 class="text-align-left">{{ __('Price') }}</h5>
                        <h6>base de datos </h6>
                    </div>
            </div>
            </div>
        </div>
    @endforeach
</div>  
<br>
<br>
<br>
<!--ETIQUETA-->
<section class="" style="background-color:#000000">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="text-white">DATOS DE CONTACTO:</h3>
                        <div class="text-white">
                            <h5>Ubicacion</h5>
                            <br>
                            <h5>Celular</h5>
                            <br>
                            <h5>Correo</h5>
                            <br>
                            <h5>Libro de reclamos</h5>
                        </div>
                        
                    </div>
                    <div class="col-md-4 ml-auto">
                        <h3 class="text-white">Puedes seguirnos en nuestras redes sociales</h3> 
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                <img width="30" height="30" class="img-circle" src="https://www.facebook.com/images/fb_icon_325x325.png" alt="">
                                </div>
                                <div class="col">
                                <img width="30" height="30" class="img-circle" src="data:image/png;base64,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" alt="">
                                </div>
                                <div class="col">
                                <img width="30" height="30" class="img-circle" src="https://www.ithotelero.com/wp-content/uploads/2013/07/kisspng-thepix-digital-marketing-logo-shiftdelete-instagram-logo-5ac795ff5a7bb0.4508285315230295033706-300x297.png" alt="">
                                </div>
                            </div>
                        </div>
                        <p class="text-white">©2021 Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
    </section>
</body>
</html>
@endsection