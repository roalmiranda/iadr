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
<section class="section" style="padding-top: 40px;padding-bottom: 40px;">
    <div class="container">
        <h6 class="title title-xs title-s1 tc-primary animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">¿Cómo ser miembro?</h6>
        <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Categorias IADR</h2>
        <div class="nk-block nk-block-features-s2">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-md-6">
                    <div class="gfx mx-auto mx-lg-0 animated zoom-animation fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                        <img src="https://www.iadr.org/sites/default/files/styles/50_50/public/2021-11/grid-doctors-smaller.jpg?h=e5734912&amp;itok=rAhSYGkR" alt="IADR_PRESENTACION">
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="nav tab-nav tab-nav-line mgb-r" role="tablist">
                        <li><a class="active" data-bs-toggle="tab" href="#general-questions-19" aria-selected="true" role="tab">Investigador</a></li>
                        <li><a data-bs-toggle="tab" href="#ico-questions-19" aria-selected="false" role="tab" class="" tabindex="-1">Meditante</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="general-questions-19" role="tabpanel">
                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.1s;">La sección boliviana de la IADR surge a partir de la inquietud e iniciativa de odontólogos investigadores bolivianos que buscan encontrar soluciones a problemas de salud oral en nuestro país, y simultáneamente promover la investigación científica en el área de odontología visando alcanzar trascendencia internacional.</p>
                        </div>
                        <div class="tab-pane fade" id="ico-questions-19" role="tabpanel">
                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.1s;">2.La sección boliviana de la IADR surge a partir de la inquietud e iniciativa de odontólogos investigadores bolivianos que buscan encontrar soluciones a problemas de salud oral en nuestro país, y simultáneamente promover la investigación científica en el área de odontología visando alcanzar trascendencia internacional.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-light">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Beneficios IADR Bolivia</h6>
            <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Miembro pleno 
            </h2>
        </div>
        <!-- Block @s -->
        <div class="nk-block nk-block-text-wrap">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-lg-6">
                    <div class="nk-block-img animated fadeInUp zoom-animation" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                        <img src="images/laptop-mobile-a1.png" alt="app">
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="nk-block-text">
                        <ul class="list list-check list-check-s3">
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">Acceso al journal dental research 
                            </li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".55" style="visibility: visible; animation-delay: 0.55s;">Acceso al journal of translation research 
                            </li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">Acceso a plataforma virtual es de cursos grabados y en vivo</li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".65" style="visibility: visible; animation-delay: 0.65s;">Descuento en eventos nacionales e internacionales 
                            </li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<section class="section">
    <!-- Block @s -->
    <div class="nk-block nk-block-features">
        <div class="background-shape bs-right"></div>
        <div class="container">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-lg-5">
                    <div class="nk-block-text">
                        <h2 class="title title-thin title-dark">Descubra los <strong class="text-primary-alt">Beneficios</strong> de <strong class="text-primary-alt">Ser Socio de IADR Bolivia</strong></h2>
                        <p>Mejore su Conocimiento y Carrera Dental</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row align-items-center">
                        <div class="col-sm-6 zoom-animation">
                            <div class="feature card card-s2 ov-h">
                                <div class="feature-text">
                                    <h5 class="title title-md">Acceso a conferencias y eventos dentales de alto nivel</h5>
                                </div>
                                <div class="feature-icon feature-icon-bg">
                                    <img src="images/icons/icon-o.png" alt="feature">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 zoom-animation">
                            <div class="feature card card-s2 ov-h">
                                <div class="feature-text">
                                    <h5 class="title title-md">Oportunidades de networking y colaboración con otros profesionales dentales.</h5>
                                </div>
                                <div class="feature-icon feature-icon-bg">
                                    <img src="images/icons/icon-p.png" alt="feature">
                                </div>
                            </div>
                            <div class="feature card card-s2 ov-h">
                                <div class="feature-text">
                                    <h5 class="title title-md">Programas de mentoría y capacitación</h5>
                                </div>
                                <div class="feature-icon feature-icon-bg">
                                    <img src="images/icons/icon-q.png" alt="feature">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .block @e -->
</section>
<section class="section bg-white" style="padding-top:0px">
    <!-- Block @s -->
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Únase a IADR Bolivia</h6>
            <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Explora los precios</h2>
        </div>
        <div class="nk-block nk-block-token">
            <div class="row gutter-vr-30px">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 zoom-element">
                            <div class="token-stage text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                <div class="token-stage-title token-stage-pre">Investigador</div>
                                <div class="token-stage-date">
                                    <h6>Beneficios..</h6>
                                    <span>Acceso al journal dental research</span>
                                </div>
                                <div class="token-stage-info">
                                    <span class="token-stage-bonus">30% Bonus</span>
                                    <span class="token-stage-cap">Soft Cap</span>
                                    <span class="token-stage-amount">$2M</span>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6 zoom-element">
                            <div class="token-stage text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                <div class="token-stage-title token-stage-one">Meditante</div>
                                <div class="token-stage-date">
                                    <h6>Beneficios..</h6>
                                    <span>Acceso al journal dental research</span>
                                </div>
                                <div class="token-stage-info">
                                    <span class="token-stage-bonus">30% Bonus</span>
                                    <span class="token-stage-cap">Soft Cap</span>
                                    <span class="token-stage-amount">$2M</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div>
    </div>
</section>
@endsection