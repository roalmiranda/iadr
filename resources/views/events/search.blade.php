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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Evento</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > <a href="/eventos">Eventos</a></p>
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
<section class="section pt-5">
    <div class="container">
        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Detalle</h6>
        <div class="nk-block nk-block-team-featured team-featured">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="team-featured-photo tc-light">
                        <img src="{{urlGes()}}img_admin/eventos/{{empty($data->photo)?'event_default.png':$data->photo}}" 
                            alt="evento_detalle">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-featured-cont">
                        <h6 class="title title-xs title-light">{{$data->area->name}}</h6>
                        <h2 class="title title-lg title-dark">{{$data->name}}</h2>
                        <p>{{$data->description}}</p>
                        @if(!empty($data->url_payment))
                        {{-- Formulario de Pago --}}
                        <div class="token-action-box text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                            <div class="token-action-date"><strong>Para realizar el pago, por favor complete el formulario de pago:</strong></div>
                            <div class="token-action-btn">
                                <a href="{{$data->url_payment}}" target="_blank" class="btn btn-lg btn-grad">Ir al formulario de pago</a></a>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if(count($data_detail))
<section class="section pt-0 pb-0" id="event">
    <div class="section section-m bg-white pt-0" id="resources">
        <div class="container container-xxl">
            <div class="nk-block">
                <h6 class="title title-xs title-s1 tc-primary animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Más información</h6>
                <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Detalle de Evento</h2>
                <div class="row g-gs">
                    {{-- Lista Detalle --}}
                    @foreach($data_detail as $detail)
                        <div class="col-xl-4 col-md-6 order-xl-2 zoom-element">
                            <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                                <div class="news-thumb">
                                    <img loading="lazy" class="w-100" src="{{urlGes()}}img_admin/detail_event/{{$detail->photo}}" alt="mas_info_evento"
                                    style="
                                    width: 350px;
                                    height: 500px;
                                    background: #CCC;
                                    overflow: hidden;">
                                </div>
                                <div class="news-excerpt">
                                    <ul class="news-tags">
                                        <li class="link-primary">{{$detail->name}}</li>
                                    </ul>
                                    <ul class="news-meta">
                                        <li>{{$detail->description}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection