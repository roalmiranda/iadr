<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('imagesiadr/logo/iconoIADR.png') }}">
    <!-- Site Title  -->
    <title>IADR BOLIVIA</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Bundle and Base CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor.bundle.css?ver=210') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style-jasmine.css?ver=210') }}">
    <!-- Extra CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css?ver=210') }}">
    {{-- Uso de Jquery --}}
    <script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>
    {{-- Extensón para la validacicón de Formularios --}}
    <script src="{!! asset('assets/jquery/jquery.validate.min.js')!!}"></script>
    {{-- SweetAlert --}}
    <script src="{!! asset('assets/sweetAlert/sweetAlert.js')!!}"></script>
    <style>
        /* Movimiento de imagenes */
        
        .img_move {
            animation: moveUpDown 4s ease-in-out infinite;
        }

        @keyframes moveUpDown {
            0%, 100% {
            transform: translateY(-4%);
            }
            50% {
            transform: translateY(4%);
            }
        }
        
        .zoom-animation {
            animation: zoom 4s ease-in-out infinite;
        }

        @keyframes zoom {
            from {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            to {
                transform: scale(1);
            }
        }
        /* SLIDER */
        .slider {
            position: relative;
            overflow: hidden;
            width: 100%;
            height: 500px;
        }

        .slide {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 100%;
            transition: left 2s;
        }

        .slide img {
            object-fit: cover;
        }

        .slider .active {
            left: 0;
        }
        /* Zoom DIV */
        .zoom-element {
            transition: transform 0.5s;
        }
        
        .zoom-element:hover {
            transform: scale(1.1);
        }
    </style>    
    @yield('header')
    
</head>

<body class="nk-body body-wider mode-onepage">
    <div class="nk-wrap">
        <header class="nk-header page-header is-sticky is-shrink is-transparent is-light" id="header">
            <!-- Header @s -->
            @include('layouts.header')
            <!-- .header-main @e -->
            <!-- Banner @s -->
            @yield('banner')
            <!-- .header-banner @e -->
        </header>
        <main class="nk-pages">
        	@yield('content')
            @include('layouts.contact')
        </main>
        <!-- Footer -->
        @include('layouts.footer')
    </div>
    <!-- Preloader -->
    <div class="preloader"><span class="spinner spinner-round"></span></div>
    <!-- JavaScript -->
    <script src="{!! asset('assets/js/jquery.bundle.js?ver=210') !!}"></script>
    <script src="{!! asset('assets/js/scripts.js?ver=210') !!}"></script>
    <script src="{!! asset('assets/js/charts.js?ver=210') !!}"></script>
    <script src="{!! asset('assets/js/charts.js?ver=210') !!}"></script>
    <!-- Script -->
    @yield('script_dev')
    <script>
        // Contacto
        $("#form").validate({
            rules: {
                name: {
                    required: true,
                    minlength: 3,
                },
                email:{
                    required: true,
                    email: true,
                },
                message:{
                    required:true,
                    minlength:10
                },
            },
            messages: {
                name: {
                    required: "Este campo es requerido",
                    minlength: "Por favor, ingrese al menos 3 caracteres.",
                },
                email:{
                    required: "Este campo es requerido",
                    email: "Por favor, introduce una dirección de correo electrónico válida."
                },
                message:{
                    required: "Este campo es requerido",
                    minlength: "Por favor, ingrese al menos 10 caracteres."
                },
            },
            // Se aplicara el error del campo dentro de un span.
            errorElement : 'span',
            // Almacenar información por medio de la URL generada en Laravel
            submitHandler: function(){
                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('email', $('#email').val());
                formData.append('message', $('#message').val());
                $(".save-contact").hide();
                $(".save-load").show();
                $.ajax({
                    url:     "{{ route('contact.store') }}",
                    headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                    method:  "POST",
                    processData:false,
                    contentType:false,
                    data: formData,
                    success:function(data){
                        $(".save-contact").show();
                        $(".save-load").hide();
                        // Limpiando datos
                        $("#form")[0].reset();
                        // Mensaje de Registro
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Enviado Correctamente!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error : function(xhr, status) {
                        $(".save-contact").show();
                        $(".save-load").hide();
                        // Mensaje de Error
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Opps, ocurrio un error inesperado.',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
                

            },
            // Personalización de clase para los inputs validados
            highlight: function(element) {
               $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
               $(element).removeClass('is-invalid');
           }
        });
        // Subscriptor
        
        $("#form1").validate({
            rules: {
                sub_email:{
                    required: true,
                    email: true,
                },
            },
            messages: {
                sub_email:{
                    required: "Este campo es requerido",
                    email: "Por favor, introduce una dirección de correo electrónico válida."
                },
            },
            // Se aplicara el error del campo dentro de un span.
            errorElement : 'span',
            // Almacenar información por medio de la URL generada en Laravel
            submitHandler: function(){
                let formData = new FormData();
                formData.append('email', $('#sub_email').val());
                $(".sub-save-contact").hide();
                $(".sub-save-load").show();
                $.ajax({
                    url:     "{{ route('subscriptor.store') }}",
                    headers: {'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                    method:  "POST",
                    processData:false,
                    contentType:false,
                    data: formData,
                    success:function(data){
                        $(".sub-save-contact").show();
                        $(".sub-save-load").hide();
                        // Limpiando datos
                        $("#form1")[0].reset();
                        // Mensaje de Registro
                        Swal.fire({
                            position: 'center',
                            icon: 'success',
                            title: 'Enviado Correctamente!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    },
                    error : function(xhr, status) {
                        $(".save-contact").show();
                        $(".save-load").hide();
                        // Mensaje de Error
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Opps, ocurrio un error inesperado.',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                });
                

            },
            // Personalización de clase para los inputs validados
            highlight: function(element) {
               $(element).addClass('is-invalid');
            },
            unhighlight: function(element) {
               $(element).removeClass('is-invalid');
           }
        });
    </script>
</body>

</html>