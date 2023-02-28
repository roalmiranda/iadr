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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Eventos</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > Eventos</p>
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
<!-- // -->
<section class="section pt-5" id="eventos"><div class="container container-xxl">
    <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Lista</h6>
    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Eventos</h2>
    <div class="nk-block">
        @if(count($data))
            <div class="row g-gs">
                <div class="col-xl-8">
                    <div class="news-item news-featured animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                        <div class="news-thumb">
                            <img class="w-100 h-100" src="images/blockchain/blog/large-a.jpg" alt="">
                        </div>
                        <div class="news-excerpt zoom-element">
                            <ul class="news-tags">
                                <li><a class="link-primary" href="#">{{strtoupper($data[0]->area->name)}}</a></li>
                            </ul>
                            <h3>{{$data[0]->name}}</h3>
                            <p class="lead">{{$data[0]->description}}</p>
                            <ul class="news-meta">
                                <li><b>Fecha de Evento: </b>{{$data[0]->dateM}}</li>
                            </ul>
                            <a href="{{route('event.search', [$data[0]->event_id, $data[0]->name])}}" class="btn btn-md btn-grad">
                                <q>Ver más</q>
                            </a>
                        </div>
                    </div>
                </div>
                @php($count = 0)
                @foreach($data as $event)
                    @if($count == 1)
                        <div class="col-xl-4 col-md-6 order-xl-2 zoom-element">
                            <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                <div class="news-thumb">
                                    <img loading="lazy" class="w-100" src="{{urlGes()}}img_admin/eventos/{{$event->photo}}" alt="img_evento"
                                    style="
                                    width: 350px;
                                    height: 250px;
                                    background: #CCC;
                                    overflow: hidden;">
                                </div>
                                <div class="news-excerpt">
                                    <ul class="news-tags">
                                        <li class="text-success">{{ strtoupper($event->area->name) }}</li>
                                    </ul>
                                    <a href=""><h5>{{$event->name}}</h5></a>
                                    <ul class="news-meta">
                                        <li><b>Fecha de Evento:</b> {{$event->dateM}}</li>
                                    </ul>
                                    <a href="{{route('event.search', [$event->event_id, $event->name])}}" class="btn btn-md btn-grad">
                                        <q>Ver más</q>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                    @php($count=1)
                @endforeach
        </div>
        @endif
    </div>
</div>
</section>
@endsection