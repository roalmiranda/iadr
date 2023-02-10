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
                                        <li class="animated" data-animate="fadeInUp" data-delay="1.5"><a href="#"><em class="social-icon fab fa-facebook-f"></em></a></li>
                                        <li class="animated" data-animate="fadeInUp" data-delay="1.55"><a href="#"><em class="social-icon fab fa-twitter"></em></a></li>
                                        <li class="animated" data-animate="fadeInUp" data-delay="1.6"><a href="#"><em class="social-icon fab fa-youtube"></em></a></li>
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
                            <img  loading="lazy" src="../../imagesiadr/img5.jpg" alt="app">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- // -->
<section class="section bg-white" id="team">
    <div class="ui-shape ui-shape-s5"></div>
    <div class="container">
        <!-- Section Head @s -->
        <div class="section-head text-center wide-auto-sm">
            <h4 class="title title-semibold animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">DIRECTORIO IADR - BOLIVIA</h4>
        </div><!-- .section-head @e -->
        <!-- Block @s -->
        <div class="nk-block nk-block-team-list team-list">
            <div class="row justify-content-center">
                @foreach($staffs as $staff)
                    <div class="col-md-3">
                        <div class="team team-s3 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                            <div class="team-photo round-full team-photo-bg">
                                <a href="#team-popup-2" class="team-show content-popup" data-overlay="bg-theme-grad-alt"></a>
                                <img  loading="lazy" src="{{urlGes()}}/img_admin/staff/{{$staff->photo}}" alt="team" class="round-full">
                            </div>
                            <h5 class="team-name title title-sm">{{$staff->name}} {{$staff->paternal}} {{$staff->maternal}}</h5>
                            <span class="team-position">
                                {{$staff->rol}}
                            </span>
                            <ul class="team-social team-social-s2">
                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                            </ul>
                            <a href="{{route('article.search', 12)}}" class="btn btn-success btn-sm">Ver más</a>
                        </div>
                        <!-- Start .team-profile  -->
                        <div id="team-popup-2" class="team-popup mfp-hide">
                            <a title="Close" class="mfp-close">×</a>
                            <div class="row align-items-start">
                                <div class="col-md-6">
                                    <div class="team-photo">
                                        <img loading="lazy" src="{{urlGes()}}/img_admin/staff/{{$staff->photo}}" alt="team">
                                    </div>
                                </div><!-- .col  -->
                                <div class="col-md-6">
                                    <div class="team-popup-info ps-md-3">
                                        <h3 class="team-name title title-lg pt-4">{{$staff->name}} {{$staff->paternal}} {{$staff->maternal}}</h3>
                                        <p class="team-position mb-1">
                                            {{substr($staff->specialty, 0, 60)}}...
                                        </p>
                                        <ul class="team-social team-social-s2 mb-4">
                                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                                        </ul>
                                        <p>He is a great man to work Lorem ipsum dolor sit amet, consec tetur adipis icing elit. Simi lique, autem. </p>
                                        <p>Tenetur quos facere magnam volupt ates quas esse Sedrep ell endus mole stiae tates quas esse Sed repell endus molesti aela uda ntium quis quam iusto minima thanks.</p>
                                        <div class="progress-list">
                                            <div class="progress-wrap">
                                                <div class="progress-title">Blockchain <span class="progress-amount">85%</span></div>
                                                <div class="progress-bar progress-bar-xs bg-black-10">
                                                    <div class="progress-percent bg-primary" data-percent="85" style="width: 85%;"></div>
                                                </div>
                                            </div>
                                            <div class="progress-wrap">
                                                <div class="progress-title">Decentralization <span class="progress-amount">68%</span></div>
                                                <div class="progress-bar progress-bar-xs bg-black-10">
                                                    <div class="progress-percent bg-primary" data-percent="68" style="width: 68%;"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .col  -->
                            </div><!-- .row  -->
                        </div><!-- .team-profile  -->
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Eventos -->
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
                        <div class="schedule-item box-bordered-grad">
                            <div class="box-bordered-inner flex-grow-0">
                                <div class="schedule-meta">
                                    <div class="schedule-meta-text">
                                        <ul class="schedule-meta-list">
                                            <li class="text-grad">Acontecimiento Anterior</li>
                                        </ul>
                                        <h5 class="schedule-meta-title">02 de Febrero de 2023</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="box-bordered-inner schedule-content">
                                <img  loading="lazy" class="schedule-thumb" src="http://ges.iadr-bolivia.com/img_admin/staff/1675404713_unnamed.png" alt="" height="150">
                                <div class="schedule-text">
                                    <h5 class="line-truncate-2">Titulo de Evento</h5>
                                    <p class="line-truncate-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias dolorem doloremque possimus facilis accusantium qui quos earum! Repellat inventore earum nobis tempora quo, distinctio eum, aspernatur nulla perspiciatis voluptatibus odio.. </p>
                                    <a href="#" class="btn btn-sm btn-grad btn-auto btn-noround btn-nocap mt-0">Ver más</a>
                                </div>
                            </div>
                        </div><!-- .schedule-item -->
                        <div class="schedule-item box-bordered-grad">
                            <div class="box-bordered-inner flex-grow-0">
                                <div class="schedule-meta">
                                    <div class="schedule-step">
                                        <h5>1</h5>
                                    </div>
                                    <div class="schedule-meta-text">
                                        <ul class="schedule-meta-list">
                                            <li class="text-grad">Phase 1</li>
                                            <li class="text-grad">Completed</li>
                                        </ul>
                                        <h5 class="schedule-meta-title">Fall 2022 - Pre Launch</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="box-bordered-inner schedule-content">
                                <img  loading="lazy" class="schedule-thumb" src="images/nft-portfolio/roadmap/b.jpg" alt="">
                                <div class="schedule-text">
                                    <h5 class="line-truncate-2">Community Game Launch Program Fall 2022</h5>
                                    <p class="line-truncate-4">Sem sit convallis sem nulla ut fames. Ac urna amet quam cras et, est hendrerit ac. Sapien, nisl enim nam velit tristique. Morbi sagittis amet neque sollicitudin. Etiam condimentum elementum sollicitudin quis massa. Adipiscing diam purus et tempus, neque, quam semper. </p>
                                    <a href="#" class="btn btn-sm btn-grad btn-auto btn-noround btn-nocap mt-0">Support Center</a>
                                </div>
                            </div>
                        </div><!-- .schedule-item -->
                        <div class="schedule-item box-bordered-grad">
                            <div class="box-bordered-inner flex-grow-0">
                                <div class="schedule-meta">
                                    <div class="schedule-step">
                                        <h5>1</h5>
                                    </div>
                                    <div class="schedule-meta-text">
                                        <ul class="schedule-meta-list">
                                            <li class="text-grad">Phase 1</li>
                                            <li class="text-grad">Completed</li>
                                        </ul>
                                        <h5 class="schedule-meta-title">Fall 2022 - Pre Launch</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="box-bordered-inner schedule-content">
                                <img  loading="lazy" class="schedule-thumb" src="images/nft-portfolio/roadmap/c.jpg" alt="">
                                <div class="schedule-text">
                                    <h5 class="line-truncate-2">Community Game Launch Program Fall 2022</h5>
                                    <p class="line-truncate-4">Sem sit convallis sem nulla ut fames. Ac urna amet quam cras et, est hendrerit ac. Sapien, nisl enim nam velit tristique. Morbi sagittis amet neque sollicitudin. Etiam condimentum elementum sollicitudin quis massa. Adipiscing diam purus et tempus, neque, quam semper. </p>
                                    <a href="#" class="btn btn-sm btn-grad btn-auto btn-noround btn-nocap mt-0">Support Center</a>
                                </div>
                            </div>
                        </div><!-- .schedule-item -->
                    </div><!-- .has-carousel -->
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->
    </div><!-- .container -->
</div>

<section class="section pt-0 pb-0" id="event">
    <div class="section section-m bg-white" id="resources">
        <div class="container container-xxl">
            <div class="nk-block">
                <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Eventos</h6>
                <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Últimos Eventos</h2>
                <div class="row g-gs">
                    <div class="col-xl-4 col-md-6 order-xl-2">
                        <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                            <div class="news-thumb">
                                <img  loading="lazy" class="w-100" src="images/blockchain/blog/b.jpg" alt="">
                            </div>
                            <div class="news-excerpt">
                                <ul class="news-tags">
                                    <li><a class="link-success" href="#">Knowledge</a></li>
                                </ul>
                                <h4 class="title title-sm"><a href="{{route('event.search', 12)}}">The Intersection with Blockchain.</a></h4>
                                <ul class="news-meta">
                                    <li>Published Dec 13, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 order-xl-2">
                        <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".8" style="visibility: visible; animation-delay: 0.8s;">
                            <div class="news-thumb">
                                <img  loading="lazy" class="w-100" src="images/blockchain/blog/c.jpg" alt="">
                            </div>
                            <div class="news-excerpt">
                                <ul class="news-tags">
                                    <li><a class="link-warning" href="#">Resources</a></li>
                                </ul>
                                <h5>6 Global Companies Building up the Metaverse</h5>
                                <ul class="news-meta">
                                    <li>Published Dec 13, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                <div class="col-sm-6 col-lg-3">
                    <div class="doc animated fadeInUp" data-animate="fadeInUp" data-delay="0.3" style="visibility: visible; animation-delay: 0.3s;">
                        <a href="{{route('article.search', 'ronald')}}">
                            <div class="doc-photo doc-shape doc-shape-a">
                                <img  loading="lazy" src="images/azalea/doc-a.jpg" alt="img1" style="cursor:pointer;">
                            </div>
                        </a>
                        <div class="doc-text">
                            <h5 class="doc-title title-sm">White Paper <small>(2022)</small></h5>
                            <a class="doc-download" href="#"><em class="ti ti-import"></em></a>
                            <div class="doc-lang">ENGLISH</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="doc animated fadeInUp" data-animate="fadeInUp" data-delay="0.4" style="visibility: visible; animation-delay: 0.4s;">
                        <div class="doc-photo doc-shape doc-shape-b">
                            <img  loading="lazy" src="images/azalea/doc-b.jpg" alt="">
                        </div>
                        <div class="doc-text">
                            <h5 class="doc-title title-sm">Two Pager <small>(2022)</small></h5>
                            <a class="doc-download" href="#"><em class="ti ti-import"></em></a>
                            <div class="doc-lang">ENGLISH</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="doc animated fadeInUp" data-animate="fadeInUp" data-delay="0.5" style="visibility: visible; animation-delay: 0.5s;">
                        <div class="doc-photo doc-shape doc-shape-c">
                            <img  loading="lazy" src="images/azalea/doc-c.jpg" alt="">
                        </div>
                        <div class="doc-text">
                            <h5 class="doc-title title-sm">One Pager <small>(2022)</small></h5>
                            <a class="doc-download" href="#"><em class="ti ti-import"></em></a>
                            <div class="doc-lang">ENGLISH</div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="doc animated fadeInUp" data-animate="fadeInUp" data-delay="0.6" style="visibility: visible; animation-delay: 0.6s;">
                        <div class="doc-photo doc-shape doc-shape-d">
                            <img  loading="lazy" src="images/azalea/doc-d.jpg" alt="">
                        </div>
                        <div class="doc-text">
                            <h5 class="doc-title title-sm">Presentation <small>(2022)</small></h5>
                            <a class="doc-download" href="#"><em class="ti ti-import"></em></a>
                            <div class="doc-lang">ENGLISH</div>
                        </div>
                    </div>
                </div>
                <ul class="pt-4 d-flex gaps g-3 justify-content-center animated fadeInUp" data-animate="fadeInUp" data-delay=".9" style="visibility: visible; animation-delay: 0.9s;">
                    <li>
                        <a href="#" class="btn btn-primary btn-round btn-md btn-nocap">Ver más</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{--  --}}
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
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.5">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#acc-1-2">¿Qué puedo realizar en IADR? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-2" class="collapse" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.6">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#acc-1-3">¿Qué beneficios obtengo como miembro? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-3" class="collapse" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s3 animated" data-animate="fadeInUp" data-delay="0.7">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#acc-1-4">¿Cómo puedo ser miembro? <span class="accordion-icon"></span></h5>
                                    <div id="acc-1-4" class="collapse" data-bs-parent="#acc-1">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
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
<!-- // -->
<section class="section">
    <div class="background-shape"></div>
    <div class="container">
        <!-- Block @s -->
        <div class="nk-block nk-block-about">
            <div class="row justify-content-between align-items-center gutter-vr-50px">
                <div class="col-lg-6">
                    <div class="nk-block-text">
                        <div class="nk-block-text-head">
                            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Contacto</h6>
                            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2"> Ponerse en contacto</h2>
                            <div class="class">
                                <p class="animated" data-animate="fadeInUp" data-delay=".3">¿Cualquier pregunta? Comuníquese con nosotros y nos pondremos en contacto con usted en breve.
                                    </p>
                            </div>
                        </div>
                        <form id="form" class="contact-form nk-form-submit">
                            <div class="field-item field-item-s2 animated" data-animate="fadeInUp" data-delay=".7">
                                <input name="contact-name" type="text" class="input-bordered required" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="field-item field-item-s2 animated" data-animate="fadeInUp" data-delay=".8">
                                <input name="contact-email" type="email" class="input-bordered required email" placeholder="Ingresa tu correo">
                            </div>
                            <div class="field-item field-item-s2 animated" data-animate="fadeInUp" data-delay=".9">
                                <textarea name="contact-message" class="input-bordered input-textarea required" placeholder="Ingresa tu mensaje"></textarea>
                            </div>
                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                            <div class="row">
                                <div class="col-sm-12 animated" data-animate="fadeInUp" data-delay="1">
                                    <button type="submit" class="btn btn-s2 btn-md btn-grad">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 text-center order-lg-first">
                    <div class="nk-block-contact nk-block-contact-s1 animated fadeInUp" data-animate="fadeInUp" data-delay="0.1" style="visibility: visible; animation-delay: 0.1s;">
                        <ul class="contact-list">
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay="0.2" style="visibility: visible; animation-delay: 0.2s;">
                                <em class="contact-icon fas fa-phone"></em>
                                <div class="contact-text">
                                    <span>+44 0123 4567</span>
                                </div>
                            </li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay="0.3" style="visibility: visible; animation-delay: 0.3s;">
                                <em class="contact-icon fas fa-envelope"></em>
                                <div class="contact-text">
                                    <span>info@company.com</span>
                                </div>
                            </li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay="0.4" style="visibility: visible; animation-delay: 0.4s;">
                                <em class="contact-icon fas fa-paper-plane"></em>
                                <div class="contact-text">
                                    <span>Join us on Telegram</span>
                                </div>
                            </li>
                        </ul>
                        <div class="nk-circle-animation nk-df-center blue small"></div><!-- .circle-animation -->
                    </div>
                    <ul class="social-links social-links-s2 justify-content-center animated fadeInUp" data-animate="fadeInUp" data-delay="0.6" style="visibility: visible; animation-delay: 0.6s;">
                        <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        <li><a href="#"><em class="fab fa-medium-m"></em></a></li>
                        <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                        <li><a href="#"><em class="fab fa-youtube"></em></a></li>
                        <li><a href="#"><em class="fab fa-bitcoin"></em></a></li>
                        <li><a href="#"><em class="fab fa-github"></em></a></li>
                    </ul>
                </div>
            </div>
        </div><!-- .block @e -->
    </div>
</section>
@endsection
@section('script_dev')
<script src="{!! asset('assets/js/gralSlider.js') !!}"></script>
@endsection