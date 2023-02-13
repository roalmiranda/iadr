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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Directorio</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > <a href="/quienes-somos">Quienes somos</a> > Directorio</p>
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
                        <img src="{{urlGes()}}img_admin/staff/{{empty($data->photo)?'default_user.png':$data->photo}}" alt="team">
                        <h5 class="team-featured-info bg-info p-3">{{$data->name}} {{$data->paternal}} {{$data->maternal}}<span>{{$data->email}}</span></h5>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-featured-cont">
                        <h6 class="title title-xs title-light">{{$data->rol}}</h6>
                        <h2 class="title title-lg title-dark">{{$data->name}} {{$data->paternal}} {{$data->maternal}}</h2>
                        <p>{{$data->bibliography}}</p>
                        <ul class="social pdb-l justify-content-center">
                            @foreach($data->staffSocial as $social)
                                <a href="{{$social->url}}" target="_blank"><li><em class="social-icon fab {{$social->social->icon}}"></em> {{$social->name}}</li></a>
                                <a href="{{$social->url}}" target="_blank"><li><em class="social-icon fab {{$social->social->icon}}"></em> {{$social->name}}</li></a>
                            @endforeach
                        </ul>
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
            <h2 class="title title-dark title-regular">Especialidades</h2>
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
                                <img src="{{urlGes()}}img_admin/detail_staff/{{$detail->photo}}" alt="blog-thumb"
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