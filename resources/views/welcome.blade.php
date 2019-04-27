<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        
        <style type="text/css">
            body{
    margin: 0;
    color: #4A4A4A;
}
*{
    box-sizing: border-box;
    outline: none;
}
img{
    max-width: 100%;
}
.slider img{
    margin: auto;
}
.b__card {
    margin-top: 20px;
    background: #4eccff;
    padding: 20px 0;
    border-radius: 5px;
}
.b__card.bg__blue{
    background: #1f779a;
}
.align-center{
    display: flex;
    align-items: center;
}
.align-center img{
    margin: auto;
}
.full__h{
    height: 100%;
}
.profile{
    margin: 50px 0;
}
#cabecera{
    position: fixed;
    width: 100%;
    padding: 10px 0;
    z-index: 9999;
}
#home{
    display: flex;
    min-height: 100vh;
    align-items: center;
    position: relative;
    overflow: hidden;
}
#home *{
    position: relative;
    z-index: 2;             
}
#home:before {
    content: '';
    position: absolute;
    width: 185%;
    height: 185%;
    z-index: 1;
    background: #009fff;
    border-radius: 50%;
    left: -43%;
    top: -92%;
    overflow: hidden;
    background-image: url({{ asset('img/persona.png') }});
    background-repeat: no-repeat;
    background-size: 250px;
    background-position: 68% 100%;
}
.space{
    margin-top:20px;
}
.white{
    color:#fff;
}
.cabeza img{
    max-width: 150px;
}
.flex{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.cabeza{
    background: #F8F8F8;
    padding: 5px 20px;
}
.btn-create{
    padding: 12px 30px;
    background-image: linear-gradient(90deg, #008fff, #0043ff);
    color: #fff !important;
    border-radius: 10px;
}
ul.slick-dots {
     margin: 20px 0 10px;
    display: flex;
    justify-content: center;
}
.slick-dots li {
    margin: 0 10px;
    list-style: none;
    outline: none;
}
.slick-dots li button {
    outline: none;
    border: 0;
    background: #009fff73;
    border-radius: 100%;
    font-size: 0;
    height: 15px;
    width: 15px;
}
.slick-dots li.slick-active button {
    background: #009fff;
}
#especialidades{
    padding: 0 0 50px 0;
}
#especialidades .group,#home .group {
    background: #f8f8f8;
    padding: 10px 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-radius: 10px;
}
#especialidades .group{
    justify-content: space-around;
}
#especialidades .group label, #home .group label{
    margin:0;
}
#especialidades .group input{
    border: 0;
    border-bottom: 1px solid #c4c4c4;
    background: #f8f8f8;
    padding: 10px;
    width: 60%;
}
#home .group input{
    border: 0;
    border-bottom: 1px solid #c4c4c4;
    background: #f8f8f8;
    width: 52%;
    padding: 10px;
}
#home .group button{
    padding: 12px 30px;
    background-image: linear-gradient(90deg, #008fff, #0043ff);
    color: #fff !important;
    border-radius: 10px;
    border: 0;
}
.mega-space{
    margin-top:60px;
}
.slider img{
    max-width: 55%;
}
#beneficios{
    padding: 50px 0;
}
.b__card img{
    max-width: 30px;
    margin-left: auto;
    margin-right: 0;
}
.b__card .text{
    color:#fff;
}
.bg-1{
    background-color:#00CBFF;
}
.bg-2{
    background-color:#00B8FF;
}
.bg-3{
    background-color:#007BFF;
}
.bg-4{
    background-color:#094DCB;
}
.bg-5{
    background-color:#094DCB;
}
.bg-6{
    background-color:#007BFF;
}
.bg-7{
    background-color:#00B8FF;
}
.bg-8{
    background-color:#00CBFF;
}
.profile{
    padding: 50px 0 0;
}
.perfil{
    background: #70707014;
}
.nopadding{
    padding: 0;
}
.p10{
    padding-left: 10%;
}
.especial_box{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
}
.especial_box .box{
    background: #DDDDDD;
    padding: 15px 20px;
    margin: 20px 15px 0 0px;
    border-radius: 8px;
}
        </style>
    </head>
    <body>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        <div class="flex-center position-ref full-height">

            <header id="cabecera">
                <div class="container">
                    <div class="flex cabeza">
                        <img src="{{ asset('img/logo.png') }}">
                        <a class="btn-create" href="#save">Crear cuenta</a>
                    </div>
                </div>
            </header>
            <section id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-6 offset-md-1">
                            <h1 class="white">Tu salud es nuestra <strong>especialidad</strong></h1>
                            <p class="space white">Formentamos la comunicación integral entre pacientes profesionales y servicios
                            de salud</p>
                            <form class="space">
                                <div class="group">
                                    <label>
                                        Mi correo:                         
                                    </label>
                                    <input type="text" name="email" id="email">
                                    <button>Empezar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <section id="make">
                <div class="container">
                    <div class="row">
                        <div class="offset-md-2 col-xs-12 col-md-8">
                            <h2 class="space text-center">¿Qué puedes <strong>hacer</strong>?</h2>
                            <p class="space text-center">
                                Creemos que el acceso al cuidado de la salud no es un tema que deba esperar,
                                permitiéndole al paciente un trato humanizado cálido y al profesional autonomia
                                en la atención y dignificación de su profesion, creamos esta Red conectando pacientes con Doctores, Centros Médicos, Centros Odontológicos, Clínicas, Farmacias, transformando y mejorando la relación entre ellos.
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-md-12">
                            <div class="slider mega-space slick-initialized slick-slider slick-dotted">
                                <div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 2220px; transform: translate3d(0px, 0px, 0px);"><div class="slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 1110px;" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00">
                                    <img src="{{ asset('img/phone.png') }}">
                                </div><div class="slick-slide" data-slick-index="1" aria-hidden="true" style="width: 1110px;" tabindex="-1" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01">
                                    <img src="{{ asset('img/phone.png') }}">
                                </div></div></div>
                                
                            <ul class="slick-dots" style="" role="tablist"><li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li><li role="presentation"><button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01" aria-label="2 of 2" tabindex="-1">2</button></li></ul></div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="beneficios">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <h1 class="text-center">Todos los <strong>beneficios</strong></h1>
                        </div>
                    </div>
                    <div class="row space">
                        <div class="col-md-3">
                            <div class="b__card bg-1">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="b__card bg-2">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="b__card bg-3">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="bg-4 b__card">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="bg-5 b__card">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="b__card bg-6">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="b__card bg-7">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-md-3">
                            <div class="b__card bg-8">
                                <div class="row">
                                    <div class="col-md-4 col-xs-12 align-center">
                                        <img src="{{ asset('img/cruz.png') }}">                                   
                                    </div>
                                    <div class="col-md-8 text">
                                        <span>Contacto inmediato entre pacientes y doctores</span>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                    </div> 

                    <div class="profile">
                        <div class="row perfil">
                            <div class="nopadding col-md-6">
                                <img src="{{ asset('img/descarga.png') }}">
                            </div>
                            <div class="col-md-6">
                                <div class="row full__h">   
                                    <div class="p10 align-center col-md-8 col-xs-12">
                                        <div class="box">
                                            <h2>Perfil de salud</h2>
                                            <p class="space">   
                                                Creemos que el acceso al cuidado de la salud no
                                                es un tema que deba esperar, permitiéndole al
                                                paciente un trato humanizado, cálido, y al
                                                profesional autonomía en la atención y
                                                dignificación de su profesión.
                                            </p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="especialidades">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <h2 class="text-center">Todos las <strong>especialidades</strong> a tu alcance</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10 offset-md-1">
                            <div class="group space">
                                <label>
                                        ¿Buscas alguna en especial?:                         
                                </label>
                                <input type="text" name="search" id="search">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="especial_box">
                                <div class="box">
                                    <span>Acupuntura</span>
                                </div>
                                <div class="box">
                                    <span>Alergia e inmunologia</span>
                                </div>
                                <div class="box">
                                        <span>Anatomía patológica</span>
                                    </div>
                                    <div class="box">
                                        <span>Anestesiología</span>
                                    </div>
                                    <div class="box">
                                        <span>Acupuntura</span>
                                    </div>
                                    <div class="box">
                                        <span>Alergia e inmunologia</span>
                                    </div>
                                    <div class="box">
                                        <span>Acupuntura</span>
                                    </div>
                                    <div class="box">
                                        <span>Alergia e inmunologia</span>
                                    </div>
                                    <div class="box">
                                            <span>Anatomía patológica</span>
                                        </div>
                                    <div class="box">
                                        <span>Anestesiología</span>
                                    </div>
                                    <div class="box">
                                        <span>Acupuntura</span>
                                    </div>
                                    <div class="box">
                                        <span>Alergia e inmunologia</span>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script type="text/javascript">
            $('.slider').slick({
              dots: true,
              infinite: false,
              speed: 300,
              arrows:false,
              slidesToShow: 1,
              slidesToScroll: 1,
              responsive: [
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true
                  }
                },
                {
                  breakpoint: 600,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                  }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
              ]
            });
        </script>
    </body>
</html>