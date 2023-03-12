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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Artículos</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > Artículos</p>
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
<section class="section pb-5" style="padding-top: 50px;">
    <div class="container">
        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Lista</h6>
        <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Artículos <p>Total ({{count($articles)}})</p></h2>
        <div class="nk-block">
            <form action="{{route('article_test')}}" method="GET">
                @csrf
                <div class="field-inline field-inline-round field-inline-s2-sm bg-light-alt">
                    <div class="field-wrap">
                        <input class="input-solid input-solid-md" type="text" name="search" id="search" placeholder="Escribe tu palabra clave" value="{{$search}}">
                        <input type="text" class="d-none" name="form-anti-honeypot" value="">
                    </div>
                    <div class="submit-wrap">
                        <button type="submit" class="btn btn-md btn-round btn-dark h-100">Buscar</button>
                    </div>
                </div>
                <div class="form-results"></div>
            </form>
            <ul class="row gaps gy-3 pt-3">
                @foreach($articles as $article)
                <li class="col-md-6 col-xl-12">
                    <div class="border rounded-4 p-3 h-100 animated fadeInUp" data-animate="fadeInUp" data-delay=".75" style="visibility: visible; animation-delay: 0.75s;">
                        <div class="d-flex flex-column flex-xl-row align-items-xl-center h-100">
                            <div class="col-xl-6 pb-2 pb-xl-0">
                                <h5 class="text-base">{{$article->name}}</h5>
                            </div>
                            <div class="col-xl-3">
                                <p class="mb-0"><b>Autor(s): </b> {{$article->author}}</p>
                                <p><b>Fecha Publicación: </b> {{$article->dateM}}</p>
                            </div>
                            <div class="col-xl-3 d-flex justify-content-xl-end mt-auto mt-xl-0 pt-3 pt-xl-0">
                                <ul class="btn-grp">
                                    <li><a href="{{route('article.search', [$article->article_id, $article->name])}}" class="btn btn-md btn-outline btn-primary btn-round btn-nocap"><span>Ver más</span> <em class="ms-3 fas fa-arrow-right"></em></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="card-body text-center">
                {{$articles->links()}}
            </div>
        </div>
    </div>
</section>
@endsection