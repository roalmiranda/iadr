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
            <div class="wide-sm">
                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">The tokens will be available for transfer thar is rorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="nk-block nk-block-token">
            <div class="row gutter-vr-30px">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="token-stage text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                <div class="token-stage-title token-stage-pre">Pre Sale</div>
                                <div class="token-stage-date">
                                    <h6>3 July 2022</h6>
                                    <span>10 Days</span>
                                </div>
                                <div class="token-stage-info">
                                    <span class="token-stage-bonus">30% Bonus</span>
                                    <span class="token-stage-cap">Soft Cap</span>
                                    <span class="token-stage-amount">$2M</span>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-4">
                            <div class="token-stage text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                <div class="token-stage-title token-stage-one">Sale Stage 1</div>
                                <div class="token-stage-date">
                                    <h6>15 August 2022</h6>
                                    <span>15 Days</span>
                                </div>
                                <div class="token-stage-info">
                                    <span class="token-stage-bonus">30% Bonus</span>
                                    <span class="token-stage-cap">Soft Cap</span>
                                    <span class="token-stage-amount">$2M</span>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-4">
                            <div class="token-stage text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                <div class="token-stage-title">Sale Stage 2t</div>
                                <div class="token-stage-date">
                                    <h6>28 October 2022</h6>
                                    <span>10 Days</span>
                                </div>
                                <div class="token-stage-info">
                                    <span class="token-stage-bonus">10% Bonus</span>
                                    <span class="token-stage-cap">Hard Cap</span>
                                    <span class="token-stage-amount">$3M</span>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- row -->
                    <div class="token-action-box text-center animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                        <div class="token-action-title">Join Our <br> Pre-Sale List</div>
                        <div class="token-action-date"><strong>Pre-Sale Start at</strong> 03 July 2022</div>
                        <div class="token-action-btn">
                            <a href="#" class="btn btn-lg btn-grad">Signup &amp; Join</a>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-5">
                    <table class="table table-s1 table-token table-token-s1 animated fadeInUp" data-animate="fadeInUp" data-delay=".8" style="visibility: visible; animation-delay: 0.8s;">
                        <tbody>
                            <tr>
                                <td class="table-head table-head-s1">Token Symbol</td>
                                <td class="table-des table-des-s1">ICOX</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Token Sale Start</td>
                                <td class="table-des table-des-s1">3 July 2022</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Token Sale End</td>
                                <td class="table-des table-des-s1">28 October 2022</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Tokens for sale</td>
                                <td class="table-des table-des-s1">100,500,000</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Specifications</td>
                                <td class="table-des table-des-s1">ICOX token</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Max circulating supply</td>
                                <td class="table-des table-des-s1">175,500,000</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Sale duration</td>
                                <td class="table-des table-des-s1">10 days</td>
                            </tr>
                            <tr>
                                <td class="table-head table-head-s1">Sale duration</td>
                                <td class="table-des table-des-s1">10 days</td>
                            </tr>
                        </tbody>
                    </table>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
        <div class="nk-block">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="sub-heading-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Token Allocation</h3>
                    <div class="token-bar-chart animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                        <div class="token-bar-item tbic1" data-percent="8" style="width: 8%;">
                            <div class="token-bar-txt">
                                <span>8%</span>
                                <span>Bounty</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic2" data-percent="12" style="width: 12%;">
                            <div class="token-bar-txt">
                                <span>12%</span>
                                <span>Presale</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic3" data-percent="20" style="width: 20%;">
                            <div class="token-bar-txt">
                                <span>20%</span>
                                <span>Team &amp; Advisor</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic4" data-percent="25" style="width: 25%;">
                            <div class="token-bar-txt">
                                <span>25%</span>
                                <span>Reserve Fund</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic5" data-percent="35" style="width: 35%;">
                            <div class="token-bar-txt">
                                <span>35%</span>
                                <span>Reserve Fund</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="row mgt-l">
                <div class="col-lg-12">
                    <h3 class="sub-heading-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">Operating Allocation</h3>
                    <div class="token-bar-chart animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                        <div class="token-bar-item tbic5" data-percent="13" style="width: 13%;">
                            <div class="token-bar-txt">
                                <span>13%</span>
                                <span>Admin &amp; Ops</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic4" data-percent="17" style="width: 17%;">
                            <div class="token-bar-txt">
                                <span>17%</span>
                                <span>Legal &amp; Advisory</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic3" data-percent="25" style="width: 25%;">
                            <div class="token-bar-txt">
                                <span>25%</span>
                                <span>Marketing &amp; Sales</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic2" data-percent="45" style="width: 45%;">
                            <div class="token-bar-txt">
                                <span>45%</span>
                                <span>Business Dev &amp; Ops</span>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
@endsection