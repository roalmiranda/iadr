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
                                            <a href="#about" class="btn btn-md btn-grad">
                                                <q>Quienes Somos</q>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#register-popup" class="btn btn-md btn-primary btn-outline">
                                                <span>Noticias</span>
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
                                <div class="slider img_move">
                                    <div class="slide">
                                    <img src="../../imagesiadr/img1.jpg" alt="Imagen 1">
                                    </div>
                                    <div class="slide">
                                    <img src="../../imagesiadr/img2.jpg" alt="Imagen 2">
                                    </div>
                                    <div class="slide">
                                    <img src="../../imagesiadr/img3.jpg" alt="Imagen 3">
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
                        <img src="https://www.iadr.org/sites/default/files/styles/50_50/public/2021-11/grid-doctors-smaller.jpg?h=e5734912&itok=rAhSYGkR" alt="IADR_PRESENTACION">
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <!-- Section Head @s -->
                    <div class="nk-block-text text-center text-md-start">
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".2">International Association for Dental Research</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".3">IADR – División Bolivia</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">La sección boliviana de la IADR surge a partir de la inquietud e iniciativa de odontólogos investigadores bolivianos que buscan encontrar soluciones a problemas de salud oral en nuestro país, y simultáneamente promover la investigación científica en el área de odontología visando alcanzar trascendencia internacional.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->

        <div class="nk-block nk-block-lg nk-block-features-s2">
            <div class="row align-items-center flex-row-reverse gutter-vr-30px">
                <div class="col-md-6">
                    <div class="gfx animated fadeInUp zoom-animation" data-animate="fadeInUp" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                        <img src="../../imagesiadr/img4.jpg" alt="gfx">
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <!-- Section Head @s -->
                    <div class="nk-block-text">
                        <h6 class="title title-xs title-s1 tc-primary animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">Estimados socios, amigos y colegas, los invitamos a participar activamente de la División Bolivia de la IADR.</h6>
                        <p class="animated" data-animate="fadeInUp" data-delay=".5">Deseamos ser su voz en las decisiones y colaborar en la promoción de investigaciones realizadas en Bolivia, así como en la generación y ejecución de nuevas ideas. Nuestro anhelo es profundamente participar en la formación de evidencia que respalde investigaciones futuras, la atención dental, la enseñanza, la prevención y la toma de decisiones en la Odontología.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div>
    </div>
</section>
<!-- // --><section class="section section-team bg-light pt-0" id="team-members">
    <div class="container">
        <!-- Section Head @s -->
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Conoce al equipo</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Directorio IADR</h2>
        </div><!-- .section-head @e -->
        <!-- Block @s -->
        <div class="nk-block nk-block-team-list">
            <div class="row justify-content-center">
                <div class="col-md-3 col-6">
                    <div class="team animated  bg-white fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;">
                        <div class="team-photo">
                            <img src="images/team/a.jpg" alt="team">
                            <a href="#team-popup-1" class="team-show content-popup"></a>
                            <ul class="team-social">
                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            </ul>
                        </div>
                        <h5 class="team-name title title-sm">Louis Baker</h5>
                        <span class="team-position pb-2">CEO &amp; Lead Blockchain</span>
                    </div>
                    <!-- Start .team-profile  -->
                    <div id="team-popup-1" class="team-popup mfp-hide">
                        <a title="Close" class="mfp-close">×</a>
                        <div class="row align-items-start">
                            <div class="col-md-6">
                                <div class="team-photo">
                                    <img src="images/team/a.jpg" alt="team">
                                </div>
                            </div><!-- .col  -->
                            <div class="col-md-6">
                                <div class="team-popup-info ps-md-3">
                                    <h3 class="team-name title title-lg pt-4">Ivan Rojas</h3>
                                    <p class="team-position">CEO &amp; Lead Blockchain </p>
                                    <ul class="team-social mb-4">
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
            </div>
        </div>
        <!-- Block @r -->
    </div>
</section>

{{-- Para ser miembro --}}
<section class="section pt-5" id="eventos"><div class="container container-xxl">
    <div class="container">
        <div class="nk-block nk-block-text-wrap">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-lg-6">
                    <div class="nk-block-img animated fadeInUp img_move" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                        <img src="../../imagesiadr/img5.jpg" alt="app">
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="nk-block-text">
                        <ul class="list list-check list-check-s3">
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;"><b>Conferencias y eventos:</b> Asista a conferencias y eventos organizados por la IADR Bolivia para mantenerse al tanto de las últimas innovaciones y tendencias en el campo dental.</li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;"><b>Comunidad de miembros:</b> La comunidad de miembros de la IADR Bolivia brinda la oportunidad de networking con otros profesionales dentales y de discutir temas relevantes en el campo dental.</li>
                            <li class="animated fadeInUp" data-animate="fadeInUp" data-delay=".65" style="visibility: visible; animation-delay: 0.65s;"><b>Mentorías:</b> La IADR Bolivia también puede brindar la oportunidad de participar en programas de mentoría con dentistas experimentados y conocedores de la industria.</li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</div>
<section class="section pt-0 pb-0" id="event">
    <div class="section section-m bg-white" id="resources">
        <div class="container container-xxl">
            <div class="nk-block">
                <div class="section-head text-center">
                    <div class="row justify-content-center">
                        <div class="col-xxl-6 col-xl-8 col-lg-9">
                            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Eventos</h6>
                            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Últimos Eventos</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-gs">
                    <div class="col-xl-4 col-md-6 order-xl-2">
                        <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                            <div class="news-thumb">
                                <img class="w-100" src="images/blockchain/blog/b.jpg" alt="">
                            </div>
                            <div class="news-excerpt">
                                <ul class="news-tags">
                                    <li><a class="link-success" href="#">Knowledge</a></li>
                                </ul>
                                <h5>What Are Decentralized Applications (DApps)?</h5>
                                <ul class="news-meta">
                                    <li>Published Dec 13, 2021</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 order-xl-2">
                        <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".8" style="visibility: visible; animation-delay: 0.8s;">
                            <div class="news-thumb">
                                <img class="w-100" src="images/blockchain/blog/c.jpg" alt="">
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
                        <a href="#" class="btn btn-primary btn-round btn-md btn-nocap">Ver todos</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="section py-0 pb-3 ov-h">
        <div class="container container-xxl">
            <div class="px-6 py-6 rounded-4 has-ovm ov-h tc-light animated fadeIn" data-animate="fadeIn" data-delay=".1" style="visibility: visible; animation-delay: 0.1s;">
                <div class="row justify-content-center">
                    <div class="col text-left d-none d-lg-block animated fadeInLeft" data-animate="fadeInLeft" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">
                        <img src="images/blockchain/eth-bnb v2.png" srcset="images/blockchain/eth-bnb2x v2.png 2x" alt="">
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-8 col-md-10 text-center">
                        <div class="nk-block pt-1 pb-3">
                            <h2 class="h1 mb-4 animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">¿Listo para comenzar?</h2>
                            <p class="lead text-white animated fadeInUp" data-animate="fadeInUp" data-delay=".5" style="visibility: visible; animation-delay: 0.5s;">Ser miembro de la Asociación Dental de Bolivia (IADR Bolivia) puede ayudarlo a impulsar su carrera dental y a estar al tanto de las innovaciones y avances en el campo dental.</p>
                            <ul class="btn-grp animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                                <li><a href="#" class="btn btn-md btn-light btn-round btn-nocap">Ser Miembro</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col text-end d-none d-lg-block animated fadeInRight" data-animate="fadeInRight" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">
                        <img src="images/blockchain/eth-bnb.png" srcset="images/blockchain/eth-bnb2x.png 2x" alt="">
                    </div>
                </div>
                <div class="nk-ovm blur-b"></div>
            </div>
        </div>
    </div>
</section>
<!-- // -->
<section class="section bg-light" id="faqs">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">FAQ</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Preguntas frecuentes</h2>
            <div class="wide-sm">
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Below we’ve provided a bit of ICO, ICO Token, cryptocurrencies, and few others. If you have any other questions, please get in touch using the contact form below.</p>
            </div>
        </div>
        <!-- Block @s -->
        <div class="nk-block">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-12">
                    <ul class="nav tab-nav tab-nav-btn pdb-r justify-content-start animated" data-animate="fadeInUp" data-delay=".4">
                        <li><a class="active" data-bs-toggle="tab" href="#general-questions-13">General</a></li>
                        <li><a data-bs-toggle="tab" href="#ico-questions-13">Pre-ICO &amp; ICO</a></li>
                        <li><a data-bs-toggle="tab" href="#tokens-sales-13">Token</a></li>
                    </ul>
                </div><!-- .col -->
                <div class="col-lg-8">
                    <div class="tab-content animated" data-animate="fadeInUp" data-delay=".5">
                        <div class="tab-pane fade show active" id="general-questions-13">
                            <div class="accordion accordion-faq" id="faq-47">
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm" data-bs-toggle="collapse" data-bs-target="#faq-47-1"> What is ICO Crypto? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-47-1" class="collapse show" data-bs-parent="#faq-47">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-47-2"> What cryptocurrencies can I use to purchase? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-47-2" class="collapse" data-bs-parent="#faq-47">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-47-3"> How can I participate in the ICO Token sale? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-47-3" class="collapse" data-bs-parent="#faq-47">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-47-4"> How do I benefit from the ICO Token? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-47-4" class="collapse" data-bs-parent="#faq-47">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="ico-questions-13">
                            <div class="accordion accordion-faq" id="faq-48">
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm" data-bs-toggle="collapse" data-bs-target="#faq-48-1"> Which of us ever undertakes laborious? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-48-1" class="collapse show" data-bs-parent="#faq-48">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-48-2"> Who do not know how to pursue rationally? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-48-2" class="collapse" data-bs-parent="#faq-48">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-48-3"> Their separate existence is a myth? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-48-3" class="collapse" data-bs-parent="#faq-48">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-48-4"> Pityful a rethoric question ran over her cheek? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-48-4" class="collapse" data-bs-parent="#faq-48">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tokens-sales-13">
                            <div class="accordion accordion-faq" id="faq-49">
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm" data-bs-toggle="collapse" data-bs-target="#faq-49-1"> When she reached the first hills? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-49-1" class="collapse show" data-bs-parent="#faq-49">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-49-2"> Big Oxmox advised her not to do? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-49-2" class="collapse" data-bs-parent="#faq-49">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-49-3"> Which roasted parts of sentences fly into your mouth? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-49-3" class="collapse" data-bs-parent="#faq-49">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item accordion-item-s2 bg-white">
                                    <h5 class="accordion-title accordion-title-sm collapsed" data-bs-toggle="collapse" data-bs-target="#faq-49-4"> Vokalia and Consonantia, there live? <span class="accordion-icon accordion-icon-s2"></span>
                                    </h5>
                                    <div id="faq-49-4" class="collapse" data-bs-parent="#faq-49">
                                        <div class="accordion-content">
                                            <p>Once ICO period is launched, You can purchased Token with Etherum, Bitcoin or Litecoin. You can also tempor incididunt ut labore et dolore magna aliqua sed do eiusmod eaque ipsa.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="nk-block-img mt-4 mt-lg-0 animated" data-animate="fadeInUp" data-delay=".6">
                        <img src="images/gfx/gfx-p.png" alt="lungwort">
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section section-contact bg-white ov-h" id="contact">
    <div class="container">
        <!-- Block @s -->
        <div class="nk-block block-contact">
            <div class="row justify-content-center gutter-vr-30px">
                <div class="col-lg-3">
                    <div class="section-head section-head-sm section-head-s9 text-center text-lg-start">
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Contacto</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".2"> Ponerse en contacto</h2>
                        <div class="class">
                            <p class="animated" data-animate="fadeInUp" data-delay=".3">¿Cualquier pregunta? Comuníquese con nosotros y nos pondremos en contacto con usted en breve.
                                </p>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between h-100">
                        <ul class="contact-list contact-list-s2">
                            <li class="animated" data-animate="fadeInUp" data-delay=".4">
                                <em class="contact-icon contact-icon-s2 fas fa-phone text-success"></em>
                                <div class="contact-text">
                                    <span>78549854</span>
                                </div>
                            </li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                <em class="contact-icon contact-icon-s2 fas fa-envelope text-danger"></em>
                                <div class="contact-text">
                                    <span>iadr-bolivia@gmail.com</span>
                                </div>
                            </li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".6">
                                <em class="contact-icon contact-icon-s2 fas fa-paper-plane"></em>
                                <div class="contact-text">
                                    <span>Wha</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 offset-lg-1">
                    <div class="gap-6x d-none d-lg-block"></div>
                    <div class="gap-4x d-none d-lg-block"></div>
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
                </div><!-- .col -->
                <div class="col-lg-4 align-self-center">
                    <div class="nk-block-img animated" data-animate="fadeInUp" data-delay="1.1">
                        <img src="images/gfx/gfx-q.png" alt="lungwort">
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
@endsection
@section('script_dev')
<script src="assets/js/gralSlider.js"></script>
@endsection