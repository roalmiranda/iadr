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
                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.1s;">Un <b>miembro investigador</b> de la Asociación Internacional de Investigación Dental (IADR) es un profesional de la odontología o de ciencias afines que se ha unido a la asociación con el objetivo de avanzar en la investigación dental y mejorar la salud bucal en todo el mundo.</p>
                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.2s;">Como miembro de la IADR, tienen acceso a una amplia variedad de recursos, redes y oportunidades para compartir su investigación y colaborar con otros investigadores de todo el mundo.</p>
                            <a href="#beneficios" class="btn btn-outline btn-grad">¡Ver más!</a>
                        </div>
                        <div class="tab-pane fade" id="ico-questions-19" role="tabpanel">
                            <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.1s;">Un <b>miembro meditante</b> de la Asociación Internacional de Investigación Dental (IADR) es un profesional de la odontología o de ciencias afines que se ha unido a la asociación <b>Sección Bolivia</b> con beneficios proporcionados a nivel nacional.</p>
                            <a href="#beneficios" class="btn btn-outline btn-grad">¡Ver más!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section bg-light">
    <!-- Block @s -->
    <div class="nk-block nk-block-features">
        <div class="background-shape bs-right"></div>
        <div class="container">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-lg-5">
                    <div class="nk-block-text">
                        <h2 class="title title-thin title-dark">Descubra los <strong >Beneficios</strong> de <strong>Ser Socio de IADR Bolivia</strong></h2>
                        <p>Mejore su Conocimiento y Carrera Dental</p>
                        <div class="nk-block-text">
                            <ul class="list list-check list-check-s6">
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">Acceso al <b><a href="https://journals.sagepub.com/home/jdr" target="_blank" rel="noopener">Journal of Dental Research (JDR)</a></b>.
                                </li>
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".55" style="visibility: visible; animation-delay: 0.55s;">Acceso al <b><a href="https://journals.sagepub.com/home/jct" target="_blank" rel="noopener">Journal of Translational Research</a></b>. 
                                </li>
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".55" style="visibility: visible; animation-delay: 0.55s;">Acceso al <b><a href="https://journals.sagepub.com/home/adr" target="_blank" rel="noopener">Advances in Dental Research</a></b>. 
                                </li>
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">Acceso a plataforma virtual es de cursos grabados y en vivo</li>
                                <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".65" style="visibility: visible; animation-delay: 0.65s;">Descuento en eventos nacionales e internacionales 
                                </li>
                            </ul>
                        </div>
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
<section class="section bg-white" id="beneficios">
    <!-- Block @s -->
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated fadeInUp" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">Únase a IADR Bolivia</h6>
            <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Explora los beneficios</h2>
        </div>
        <div class="nk-block nk-block-token">
            <div class="row gutter-vr-30px">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-sm-6 zoom-element">
                            <div class="token-stage animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                                <div class="token-stage-title text-center token-stage-pre">Investigador</div>
                                <div class="token-stage-info p-5">
                                    <ul class="list list-check list-check-s1">
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Miembro de la mayor organización en investigación odontológica a nivel mundial.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Participa en Webinars en vivo organizados por IADR.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Accede a grabaciones de cursos y congresos organizados por IADR
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Accede vía online a la revista Journal of Dental Research (JDR) durante todo el año.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Participa en redes y grupos de investigación a nivel mundial
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Recibe descuentos en curso nacionales y en la Sesión General de IADR.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Compite por premios, reconocimientos y becas de IADR.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Recibe tutorías para la creación y ejecución de proyectos de investigación.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Participa en cursos organizados por la sección Bolivia de IADR
                                        </li>
                                    </ul>
                                </div>
                                <div class="token-stage-date text-center">
                                    <h6>Cuota Anual</h6>
                                </div>
                                <div class="token-stage-date text-center">
                                    <h6><span class="badge badge-info mb-2">Estudiante</span></h6>
                                    <h3>75 $</h3>
                                </div>
                                <div class="token-stage-date text-center">
                                    <h6><span class="badge badge-dark mb-2">Profesional</span></h6>
                                    <h3>65 $</h3>
                                </div>
                                <div class="col-md-12 text-center p-4 p-lg-5 bg-light">
                                    <a href="https://www.iadr.org/membership" class="btn btn-outline btn-grad on-bg-light-alt">¡Inscríbete ahora!</a>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-sm-6 zoom-element">
                            <div class="token-stage animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                <div class="token-stage-title text-center token-stage-one">Meditante</div>
                                <div class="token-stage-info p-5">
                                    <ul class="list list-check list-check-s1">
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Miembro de la sección boliviana de IADR.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Recibe tutorías para la creación y ejecución de proyectos de investigación.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Participa en cursos organizados por la sección Bolivia de IADR.
                                        </li>
                                        <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">
                                            Participa en redes y grupos de investigación a nivel nacional.
                                        </li>
                                    </ul>
                                </div>
                                <div class="token-stage-date text-center">
                                    <h6>Cuota Anual</h6>
                                </div>
                                <div class="token-stage-date text-center">
                                    <h6><span class="badge badge-info mb-2">Estudiante</span></h6>
                                    <h3>250 Bs.</h3>
                                </div>
                                <div class="token-stage-date text-center">
                                    <h6><span class="badge badge-dark mb-2">Profesional</span></h6>
                                    <h3>150 Bs.</h3>
                                </div>
                                <div class="col-md-12 text-center p-4 p-lg-5 bg-light">
                                    <a href="https://forms.gle/8chz8uEjy7i8QdB28" target="_blank" class="btn btn-outline btn-grad on-bg-light-alt">¡Inscríbete ahora!</a>
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