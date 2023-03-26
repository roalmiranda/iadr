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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Miembro</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > Miembro</p>
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
{{-- Bibliografia --}}
<section class="section pt-5 pb-5">
    <div class="container">
        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Conoce más sobre</h6>
        <div class="nk-block nk-block-team-featured team-featured">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0 zoom-animation">
                    <div class="team-featured-photo tc-light">
                        <img src="{{urlGes()}}img_admin/member/{{empty($data->photo)?'default_user.png':$data->photo}}" alt="team">
                        <h5 class="team-featured-info bg-info p-3">{{$data->name}} {{$data->paternal}} {{$data->maternal}}<span>{{$data->email}}</span></h5>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-featured-cont">
                        <h6 class="title title-xs title-light">{{$data->rol==1?'Investigador':'Meditante'}}</h6>
                        <h2 class="title title-lg title-dark">{{$data->name}} {{$data->paternal}} {{$data->maternal}}</h2>
                        <p>{{$data->bibliography}}</p>
                        <div class="row">
                            @foreach($data->memberSocial as $social)
                                <div class="col-md-6 pb-1">
                                    <a href="{{$social->url}}" target="_blank" class="title-light">
                                        <span class="tc-dark">
                                            <i class="social-icon p-2 bg-{{$social->social->color}} {{$social->social->icon}}"></i></span>
                                            {{$social->name}}
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light-grad">
    <div class="ui-mask-right ui-mask-s12"></div>
    <div class="container">
        <!-- Section Head @s -->
        <div class="section-head text-center wide-sm animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
            <h2 class="title title-dark title-regular">Formación Académica</h2>
        </div>
        <!-- Section Head @s -->
        <div class="nk-block">
            <div class="row">
                @php($arrays = explode(",", $data->specialty))
                @foreach($arrays as $array)
                    <div class="col-md-4 zoom-element">
                        <div class="feature feature-center card animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                            <div class="feature-text feature-currency">
                                <h3 class="title title-sm">{{$array}}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
{{-- Detalle --}}
@if(count($data_detail))
<section class="section section-contact bg-light-alt pt-5 pb-5" id="blog">
    <div class="container">
        <div class="section-head text-center wide-auto-sm">
            <h2 class="title title-lg title-dark">Logros Profesionales</h2>
        </div>
        <div class="nk-block nk-block-blog">
            <div class="row justify-content-center">
                @foreach($data_detail as $detail)
                    <div class="col-lg-4 col-sm-9 zoom-element">
                        <div class="blog blog-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                            <div class="blog-photo">
                                <img src="{{urlGes()}}img_admin/detail_member/{{$detail->photo}}" alt="blog-thumb"
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

@if(count($articles))
<section class="section bg-light">
    <div class="container">
        <div class="section-head section-head-s9 wide-md pb-2">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Artículos Publicados</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Lista de Artículos</h2>
            <p>Total ({{count($articles)}})</p>
        </div>
        <div class="container p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-mb-10">
                    <div class="accordion" id="career">
                        @php($index=0)
                        @foreach($articles as $article)
                        @php($index++)
                        <div class="accordion-item accordion-item-s3 border-b-none pb-0 current">
                            <div class="accordion-header">
                                <div class="row collapsed">
                                    <div class="col-md-7">
                                        <b class="tc-dark"><a href="{{route('article.search', [$article->article_id, $article->name])}}">{{$index}}. {{$article->name}}</a></b>
                                    </div>
                                    <div class="col-md-3">
                                        <p><b>Fecha publicación: </b>{{$article->date}}</p>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="btn btn-primary btn-sm mt-0 btn-auto collapsed" data-bs-toggle="collapse" data-bs-target="#career{{$index}}" aria-expanded="false">Ver más</div>
                                    </div>
                                </div>

                            </div><!-- .accordion-header -->
                            <div id="career{{$index}}" class="collapse" data-bs-parent="#career" style="">
                                <div class="accordion-body">
                                    <div class="text-box accordion-box">
                                        <h4 class="title title-md">Autor(es)</h4>
                                        <h5 class="title title-sm tc-primary py-3">{{$article->author}}</h5>
                                        <h4 class="title title-md">Descripción</h4>
                                        <p>{{$article->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div><!-- .accordian -->
                </div>
            </div>
        </div>
    </div>
</section>
@endif
@endsection