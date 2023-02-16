@extends('layouts.app')
@section('banner')
<div class="header-banner bg-light ov-h header-banner-jasmine pb-3">
    <div class="background-shape"></div>
    <div class="nk-banner">
        <div class="banner banner-fs banner-single">
            <div class="banner-wrap my-auto">
                <div class="container container-xxl">
                    <div class="row align-items-center justify-content-center justify-content-lg-between gutter-vr-60px">
                        <div class="col-lg-6 col-xl-5 text-center text-lg-start">
                            <div class="banner-caption wide-auto text-center text-lg-start">
                                <div class="cpn-head mt-0">
                                    <h1 class="title title-xl-2 animated" data-animate="fadeInUp" data-delay="1.25">International Association for Dental Research</h1>
                                </div>
                                <div class="cpn-text cpn-text-s1">
                                    <p class="lead animated" data-animate="fadeInUp" data-delay="1.35">División Bolivia</p>
                                </div>
                                <div class="cpn-btns">
                                    <ul class="btn-grp animated" data-animate="fadeInUp" data-delay="1.45">
                                        <li>
                                            <a href="/quienes-somos" class="btn btn-md btn-grad">
                                                <q>Quienes Somos</q>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/eventos"class="btn btn-md btn-primary btn-outline">
                                                <span>Eventos</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="cpn-social">
                                    <ul class="social">
                                        <li class="animated" data-animate="fadeInUp" data-delay="1.5"><a href="https://www.facebook.com/OPIEBOLIVIA?mibextid=LQQJ4d" target="_blank"><em class="social-icon fab fa-facebook-f"></em></a></li>
                                        {{-- <li class="animated" data-animate="fadeInUp" data-delay="1.55"><a href="#"><em class="social-icon fab fa-twitter"></em></a></li>
                                        <li class="animated" data-animate="fadeInUp" data-delay="1.6"><a href="#"><em class="social-icon fab fa-youtube"></em></a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg-6 col-xl-7 col-md-8 col-sm-9">
                            <div class="banner-caption wide-auto text-center text-lg-start">
                                <div class="slider">
                                    <div class="slide">
                                    <img  loading="lazy" src="../../imagesiadr/img1.jpg" alt="Imagen 1">
                                    </div>
                                    <div class="slide">
                                    <img  loading="lazy" src="../../imagesiadr/img2.jpg" alt="Imagen 2">
                                    </div>
                                    <div class="slide">
                                    <img  loading="lazy" src="../../imagesiadr/img3.jpg" alt="Imagen 3">
                                    </div>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div>
        </div>
    </div>
    <div id="particles-bg" class="particles-container particles-bg" data-pt-base="#00c0fa" data-pt-base-op=".3" data-pt-line="#2b56f5" data-pt-line-op=".5" data-pt-shape="#00c0fa" data-pt-shape-op=".2"></div>
</div>


@endsection
@section('content')
<!-- // -->
<section class="section bg-light-grad" id="about">
    <div class="container">
        <!-- Block @s -->
        <div class="nk-block nk-block-features-s2">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-md-6">
                    <div class="gfx mx-auto mx-lg-0 animated zoom-animation" data-animate="fadeInUp" data-delay=".1">
                        <img  loading="lazy" src="../../imagesiadr/img0.jpg" alt="IADR_PRESENTACION">
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <!-- Section Head @s -->
                    <div class="nk-block-text text-center text-md-start">
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".2">International Association for Dental Research</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".3">IADR – División Bolivia</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">La sección boliviana de la IADR surge a partir de la inquietud e iniciativa de odontólogos investigadores bolivianos que buscan encontrar soluciones a problemas de salud oral en nuestro país, y simultáneamente promover la investigación científica en el área de odontología visando alcanzar trascendencia internacional.</p>
                        <ul class="btn-grp animated fadeInUp" data-animate="fadeInUp" data-delay="1.45" style="visibility: visible; animation-delay: 1.45s;">
                            <li>
                                <a href="/quienes-somos" class="btn btn-md btn-grad">
                                    <q>Más Información</q>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div>
    </div>
</section>
<section class="section" id="eventos">
    <div class="container container-xxl">
        <div class="container">
            <div class="nk-block nk-block-text-wrap">
                <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".2">Únete a IADR Bolivia</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".3">Mejore su Conocimiento</h2>
                <div class="row align-items-center gutter-vr-30px">
                    <div class="col-lg-6">
                        <div class="nk-block-text">
                            <ul class="list list-check list-check-s3">
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;"><b>Conferencias y eventos:</b> Asista a conferencias y eventos organizados por la IADR Bolivia para mantenerse al tanto de las últimas innovaciones y tendencias en el campo dental.</li>
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;"><b>Comunidad de miembros:</b> La comunidad de miembros de la IADR Bolivia brinda la oportunidad de networking con otros profesionales dentales y de discutir temas relevantes en el campo dental.</li>
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".65" style="visibility: visible; animation-delay: 0.65s;"><b>Mentorías:</b> La IADR Bolivia también puede brindar la oportunidad de participar en programas de mentoría con dentistas experimentados y conocedores de la industria.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="nk-block-img animated fadeInUp img_move" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                            <img  loading="lazy" src="{{asset('imagesiadr/img5.jpg')}}" alt="app">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Directorio --}}
<section class="section section-team bg-light" id="team">
    <div class="container">
        <!-- Section Head @s -->
        <div class="section-head text-center wide-auto">
            <h2 class="title title-lg title-dark animated" data-animate="fadeInUp" data-delay=".1">DIRECTORIO IADR - BOLIVIA</h2>
        </div><!-- .section-head @e -->
        <!-- Block @s -->
        <div class="nk-block">
            <div class="row justify-content-center">
                {{-- Lista de Directorio --}}
                @foreach($staffs as $staff)
                <div class="col-lg-3 col-sm-6 zoom-element">
                    <div class="team animated bg-white" 
                            data-animate="fadeInUp" 
                            data-delay=".2" 
                            style="-webkit-box-shadow: 32px 38px 71px -44px rgba(163,163,163,1);
                            -moz-box-shadow: 32px 38px 71px -44px rgba(163,163,163,1);
                            box-shadow: 32px 38px 71px -44px rgba(163,163,163,1);">
                        <div class="team-photo text-center">
                            <img src="{{urlGes()}}img_admin/staff/{{empty($staff->photo)?'default_user.png':$staff->photo}}" alt="team"
                                class="round-full"
                                style="
                                width: 270px;
                                height: 270px;
                                background: #CCC;
                                overflow: hidden;">
                            <a href="{{route('directory.search', [$staff->staff_id, $staff->name_staff])}}" class="team-show"></a>
                            <ul class="team-social">
                                @foreach($staff->staffSocial as $social)
                                    <li><a href="{{$social->url}}" target="_blank"><em class="fab {{$social->social->icon}}"></em></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <h5 class="team-name title title-sm">{{$staff->name_staff}}</h5>
                        <span class="team-position pb-3">{{$staff->rol}}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Block @r -->
    </div>
</section>
<section class="section bg-white" id="team">
    <div class="background-shape bs-right"></div>
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">IADR Bolivia</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Directorio</h2>
        </div>
        <div class="nk-block nk-block-left nk-block-team-list team-list tc-light">
            <div class="row justify-content-center">
                {{-- Lista de Directorio --}}
                @foreach($staffs as $staff)
                        <div class="col-lg-3 col-sm-6 zoom-element">
                            <div class="team team-s4 round bg-theme-alt ms-0">
                                <a href="{{route('directory.search', [$staff->staff_id, $staff->name_staff])}}">
                                <div class="team-photo team-photo-s1 round-full">
                                    <img src="{{urlGes()}}img_admin/staff/{{empty($staff->photo)?'default_user.png':$staff->photo}}" 
                                        alt="team" 
                                        class="round-full">
                                </div>
                                </a>
                                <h5 class="team-name">{{$staff->paternal}} {{$staff->maternal}} <br> {{$staff->name}}</h5>
                                <span class="team-position tc-primary">{{$staff->rol}}</span>
                                {{-- <div class="team-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                                </div> --}}
                            <ul class="team-social">
                                @foreach($staff->staffSocial as $social)
                                    <li><a href="{{$social->url}}" target="_blank"><em class="fab {{$social->social->icon}}"></em></a></li>
                                @endforeach
                            </ul>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Eventos -->
@if(false)
<div class="section section-t-l pb-0" id="roadmap">
    <div class="container container-xxl">
        <div class="nk-block">
            <div class="section-head text-center">
                <div class="row justify-content-center">
                    <div class="col-xxl-6 col-xl-8 col-lg-9">
                        <h2>Últimos <span class="text-grad">Eventos</span></h2>
                    </div>
                </div>
            </div><!-- .section-head -->
            <div class="row justify-content-center">
                <div class="col-xxl-8 col-xl-9">
                    <div class="has-carousel carousel-navs-middle carousel-navs-fill carousel-dots-long-line carousel-dots-sharp carousel-center-focused" data-margin="28" data-items="1" data-navs="true" data-dots="true" data-loop="true">
                        {{-- Lista de Eventos --}}
                        @foreach($events as $event)
                            <div class="schedule-item box-bordered-grad">
                                <div class="box-bordered-inner flex-grow-0">
                                    <div class="schedule-meta">
                                        <div class="schedule-meta-text">
                                            <ul class="schedule-meta-list">
                                                <li class="text-grad">
                                                    <b>{{strtoupper($event->area->name)}}</b>
                                                </li>
                                            </ul>
                                            <h5 class="schedule-meta-title">{{$event->dateM}}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-bordered-inner schedule-content">
                                    <img loading="lazy" 
                                        class="schedule-thumb" 
                                        src="{{urlGes()}}img_admin/eventos/{{empty($event->photo)?'event_default.png':$event->photo}}" 
                                        alt="img">
                                    <div class="schedule-text">
                                        <h5 class="line-truncate-2">{{$event->name}}</h5>
                                        <p class="line-truncate-4">{{$event->description}}</p>
                                        <a href="{{route('event.search', [$event->event_id, $event->name])}}" class="btn btn-sm btn-grad btn-auto btn-noround btn-nocap mt-0">Ver más</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif

<section class="section pt-0 pb-0" id="event">
    <div class="section section-m bg-white" id="resources">
        <div class="container container-xxl">
            <div class="nk-block">
                <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Eventos</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Últimos Eventos</h2>
                <div class="row g-gs">
                    @foreach($events as $event)
                        <div class="col-xl-4 col-md-6 order-xl-2 zoom-element">
                            <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                                <div class="news-thumb">
                                    <img  loading="lazy" 
                                        class="w-100" src="{{urlGes()}}img_admin/eventos/{{empty($event->photo)?'event_default.png':$event->photo}}" 
                                        alt="event"
                                        style="
                                        width: 300px;
                                        height: 200px;
                                        background: #CCC;
                                        overflow: hidden;">
                                </div>
                                <div class="news-excerpt">
                                    <span class="link-primary"><b>{{strtoupper($event->area->name)}}</b></span>
                                    <h4 class="title title-sm"><a href="{{route('event.search', [$event->event_id, $event->name])}}">{{$event->name}}</a></h4>
                                    <ul class="news-meta">
                                        <li>{{$event->dateM}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <ul class="pt-4 d-flex gaps g-3 justify-content-center animated fadeInUp" data-animate="fadeInUp" data-delay=".9" style="visibility: visible; animation-delay: 0.9s;">
                    <li>
                        <a href="/eventos" class="btn btn-primary btn-round btn-md btn-nocap">Ver más</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Articulos -->
<section class="section bg-light-grad" id="docs">
    <div class="container container-xxl">
        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Artículos</h6>
        <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Últimos Artículos</h2>
        <div class="nk-block">
            <div class="row gutter-vr-50px">
                @foreach($articles as $article)
                    <div class="col-sm-6 col-lg-3">
                        <div class="doc animated fadeInUp" data-animate="fadeInUp" data-delay="0.3" style="visibility: visible; animation-delay: 0.3s;">
                            <a href="{{route('article.search', [$article->article_id, $article->name])}}">
                                <div class="doc-photo doc-shape doc-shape-a">
                                    <img  loading="lazy" 
                                        src="{{urlGes()}}img_admin/articulos/{{empty($article->photo)?'article_default.png':$article->photo}}" 
                                        alt="img1" 
                                        style="
                                        width: 300px;
                                        height: 280px;
                                        background: #CCC;
                                        overflow: hidden;
                                        cursor:pointer;">
                                </div>
                            </a>
                            <div class="doc-text">
                                <h5 class="doc-title title-sm">{{$article->name}} <small>({{$article->year}})</small></h5>
                                @if(!empty($article->document))
                                    <a class="doc-download" href="{{urlGes()}}document_admin/articulos/{{$article->document}}" download  target="_blank" title="Descargar Articulo"><em class="ti ti-import"></em></a>
                                @endif
                                @if(!empty($article->document))
                                    <a class="doc-download bg-success" href="{{$article->url}}"  target="_blank" title="Ver Oficial"><em class="ti ti-link"></em></a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
                <ul class="pt-4 d-flex gaps g-3 justify-content-center animated fadeInUp" data-animate="fadeInUp" data-delay=".9" style="visibility: visible; animation-delay: 0.9s;">
                    <li>
                        <a href="/articulos" class="btn btn-primary btn-round btn-md btn-nocap">Ver más</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="section bg-theme-alt tc-light section-m">
        <div class="container">
            <div class="nk-block">
                <div class="text-center">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8 col-lg-9">
                            <div class="pb-1 img_move">
                                <h2 class="animated" data-animate="fadeInUp" data-delay=".3">¿Listo para comenzar?</h2>
                                <p class="lead animated" data-animate="fadeInUp" data-delay=".4">Ser miembro puede ayudarlo a impulsar su carrera dental y ha estar al tanto de las innovaciones y avances en el campo dental.</p>
                                <ul class="btn-grp animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                    <li><a href="/membresia" class="btn btn-md btn-light btn-round btn-nocap">Ser Miembro</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .container -->
        <div class="nk-ovm ovm-img-avatars d-none d-lg-block ov-h animated" data-animate="fadeIn" data-delay=".2"></div>
    </div><!-- .section -->
</section>
<!-- // -->
<section class="section bg-light" id="faqs">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">FAQ</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Preguntas frecuentes</h2>
        </div>
        <!-- Block @s -->
        <div class="nk-block">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-2-1">
                            <div class="accordion" id="acc-1">
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.4">
                                    <h5 class="accordion-title accordion-title-sm" data-bs-toggle="collapse" data-bs-target="#acc-1-1">¿Qué es IADR Bolivia? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-1" class="collapse show" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p>Esta organización es una sucursal boliviana de la Asociación Internacional para la Investigación Dental, que es una organización global dedicada a promover la investigación dental y mejorar la salud bucal a nivel mundial.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.5">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#acc-1-2">¿Qué puedo realizar en IADR? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-2" class="collapse" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p>En IADR Bolivia, puedes participar en eventos y actividades relacionados con la investigación dental, como conferencias, simposios y presentaciones de investigaciones. También puedes interactuar con otros profesionales y expertos en el campo de la investigación dental, y acceder a recursos y publicaciones sobre el tema. Además, puedes contribuir a la misión de IADR de promover la investigación dental y mejorar la salud bucal a nivel local y mundial.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.6">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#acc-1-3">¿Qué beneficios obtengo como miembro? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-3" class="collapse" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p>Puedes obtener diversos beneficios en eventos y actividades organizados por la asociación, así como también en publicaciones y recursos relacionados con la investigación dental. También puedes tener acceso a una amplia red de profesionales y expertos en el campo, lo que puede ayudarte a desarrollar tus habilidades y conocimientos en la investigación dental.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.7">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#acc-1-4">¿Cómo puedo ser miembro? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-4" class="collapse" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.1s;">Para ser miembro de IADR Bolivia, debes seguir los siguientes pasos:</p>
                                            <ul class="list list-check list-check-s1">
                                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.2s;"><b>Paso 1:</b> Ir a la página web de IADR Bolivia y buscar la sección de <a class="link" href="/membresia" title="Ir a Membresía">"Membresía"</a>.</li>
                                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.25s;"><b>Paso 2:</b> Leer los requisitos de membresía y verificar si cumples con ellos.</li>
                                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.3s;"><b>Paso 3:</b> Completar un formulario de solicitud de membresía en línea o descargar un formulario de solicitud y enviarlo por correo.</li>
                                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.35s;"><b>Paso 4:</b> Proporcionar información personal y profesional, así como una declaración de interés en la investigación dental.</li>
                                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.4s;"><b>Paso 5:</b> Pagar la tarifa de membresía correspondiente.</li>
                                            </ul>
                                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.45s;">Después de completar estos pasos, tu solicitud de membresía será revisada por los oficiales de IADR Bolivia. Si eres aceptado como miembro, recibirás una confirmación y tendrás acceso a todos los recursos y oportunidades disponibles para los miembros.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- .block @e -->
    </div>
</section>
@endsection
@section('script_dev')
<script src="{!! asset('assets/js/gralSlider.js') !!}"></script>
@endsection