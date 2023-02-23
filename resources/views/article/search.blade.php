@extends('layouts.app')
@section('banner')

<div class="header-banner bg-light ov-h header-banner-jasmine pb-3">
    <div class="background-shape"></div>
    <div class="nk-banner">
        <div class="banner banner-page">
            <div class="banner-wrap">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-9">
                            <div class="banner-caption cpn tc-light text-center">
                                <div class="cpn-head">
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Articulo</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > <a href="/eventos">Articulos</a></p>
                                    </b>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-bg" class="particles-container particles-bg" data-pt-base="#00c0fa" data-pt-base-op=".3" data-pt-line="#2b56f5" data-pt-line-op=".5" data-pt-shape="#00c0fa" data-pt-shape-op=".2"></div>
</div>


@endsection
@section('content')
<section class="section bg-white pt-5">
    <div class="container">
        <div class="nk-block nk-block-blog">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-featured text-center">
                            <img class="round" src="{{urlGes()}}img_admin/articulos/{{empty($data->photo)?'article_default.png':$data->photo}}" alt="featured"
                            style="
                            width: 50%;
                            height: 20%;
                            background: #CCC;
                            overflow: hidden;
                            cursor:pointer;">
                        </div>
                        <ul class="blog-meta">
                            <li><b>Fecha publición: </b>{{$data->dateM}}</li>
                            <li><b>Categoria: </b>{{strtoupper($data->area->name)}}</li>
                        </ul>
                        <div class="blog-content">
                            <h2 class="title">{{strtoupper($data->name)}}</h2>
                            <p>{{$data->description}}</p>
                        </div>
                        {{-- <ul class="blog-tags">
                            <li><a href="#">bitcoin</a></li>
                            <li><a href="#">tokens</a></li>
                        </ul> --}}
                        @if(!empty($data->url))
                            <div class="token-action-box text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                <div class="token-action-date"><strong>Para tener acceso al recurso ingresé a:</strong></div>
                                <div class="token-action-btn">
                                    <a href="{{$data->url}}" class="btn btn-lg btn-grad" target="_blank">¡Haz Click!</a>
                                </div>
                            </div>
                        @endif
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="sidebar ms-lg-4 mt-5 mt-lg-0">
                        {{-- <div class="wgs wgs-category">
                            <h6 class="wgs-title">Categoria</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links wgs-links-category">
                                    <li><a href="#">Ortodoncia</a></li>
                                    <li><a href="#">Endodoncia</a></li>
                                    <li><a href="#">Cirugia Bucal</a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="wgs wgs-cta bg-theme tc-light round">
                            <div class="wgs-body">
                                <div class="title title-sm"><b>¿Cómo podemos ayudarte?</b></div>
                                <p>Póngase en contacto con nuestro equipo de soporte si necesita ayuda o tiene alguna pregunta.</p>
                                <a href="/contacto" class="btn btn-md btn-light">Contáctenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .nk-block -->
    </div><!-- .container -->
</section>

{{-- Detalle --}}
@if(count($data_detail))
<section class="section section-contact bg-light-alt" id="blog">
    <div class="container">
        <div class="section-head text-center wide-auto-sm">
            <h2 class="title title-lg title-dark">Información Extra</h2>
        </div>
        <div class="nk-block nk-block-blog">
            <div class="row justify-content-center">
                @foreach($data_detail as $detail)
                    <div class="col-lg-4 col-sm-9 zoom-element">
                        <div class="blog blog-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                            <div class="blog-photo">
                                <img src="{{urlGes()}}img_admin/detail_article/{{$detail->photo}}" alt="blog-thumb"
                                style="
                                width: 350px;
                                height: 350px;
                                background: #CCC;
                                overflow: hidden;">
                            </div>
                            <div class="blog-text">
                                <h4 class="title title-sm"><a href="#">{{$detail->name}}</a></h4>
                                <p>{{$detail->description}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif
@endsection