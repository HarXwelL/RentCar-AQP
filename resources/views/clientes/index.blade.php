@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

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
            .ava {
                margin: 5px;
                padding: 10px;
            }
        </style>
</head>
<body>
    <section>
    <!--seccion 1 -->
        <div class="ava">
            <div class="container-fluid m-10 pb-5" style="background-color:#E7E8EA">
                <br>
                <h2 class="text-center"><b>¿Quiénes somos?</b></h2>
                <div class="row">
                    <div class="col">
                        <br>
                        <h4>La empresa “Nombre a definir” provee el servicio de alquiler de coches donde se podrá alquilar distintos autos, se podrá ver y escoger entre distintos modelos, también se mostrará la descripción de cada auto, además que el registro de la página será rápido y sencillo, el cual ayudará a cada cliente, y también el cliente podrá tener acceso a ciertas ofertas especiales.</h4>
                    </div>  
                    <div class="col">
                        <img class="card-img" src="data:image/jpeg;base64,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" alt="">
                    </div>  
                </div>
                
            </div>
        </div>
    </section>
    
  <section>
  <!--seccion 2 -->
    <div class="container">
        <div class="row">
        <div class="col-md-4 justify container-fluid m-5 pb-5" style="background-color:#E7E8EA">
            <h2><b>Visión</b></h2>
            <h4>Revolucionar el servicio de renta de automóviles en Perú, con la colaboración de profesionales altamente calificados en el rubro.</h4>
        </div>
      
        <div class="col-md-4 offset-md-4 justify container-fluid m-5 pb-5" style="background-color:#E7E8EA">
            <h2><b>Misión</b></h2>
            <h4>Ofrecer la mejor experiencia de renta de automóviles para nuestros clientes, poniendo a su disposición la más amplia y moderna flota de unidades.</h4>
        </div>
        <div class="offset-md-4 justify container-fluid m-5 pb-5" style="background-color:#E7E8EA">
            <h2><b>Valores</b></h2>
            <h4>
            - Transparencia
            <br>
            - Honestidad
            <br>
            - Respeto
            <br>
            - Excelencia
            <br>
            - Diligencia
            <br>
            - Adaptabilidad
            <br>
            - Justicia
            <br>
            - Puntualidad
            <br>
            - Cercanía y Orientación al cliente
            </h4>
        </div>
        </div>
    </section>
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop