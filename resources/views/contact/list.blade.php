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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Contacto</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > Contacto</p>
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
<section class="section" style="padding-top:50px;">
    <div class="background-shape"></div>
    <div class="container">
        <!-- Block @s  -->
        <div class="nk-block nk-block-about">
            <div class="row justify-content-between align-items-center gutter-vr-50px">
                <div class="col-lg-6">
                    <div class="nk-block-text">
                        <div class="nk-block-text-head">
                            <h2 class="title animated fadeInUp" data-animate="fadeInUp" data-delay=".2" style="visibility: visible; animation-delay: 0.2s;"> Ponerse en contacto</h2>
                            <div class="class">
                                <p class="animated fadeInUp" data-animate="fadeInUp" data-delay=".3" style="visibility: visible; animation-delay: 0.3s;">¿Cualquier pregunta? Comuníquese con nosotros y nos pondremos en contacto con usted en breve.
                                    </p>
                            </div>
                        </div>
                        <form id="form" class="contact-form nk-form-submit" novalidate="novalidate">
                            <div class="field-item field-item-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".7" style="visibility: visible; animation-delay: 0.7s;">
                                <input name="contact-name" type="text" class="input-bordered required" placeholder="Ingresa tu nombre">
                            </div>
                            <div class="field-item field-item-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".8" style="visibility: visible; animation-delay: 0.8s;">
                                <input name="contact-email" type="email" class="input-bordered required email" placeholder="Ingresa tu correo">
                            </div>
                            <div class="field-item field-item-s2 animated fadeInUp" data-animate="fadeInUp" data-delay=".9" style="visibility: visible; animation-delay: 0.9s;">
                                <textarea name="contact-message" class="input-bordered input-textarea required" placeholder="Ingresa tu mensaje"></textarea>
                            </div>
                            <input type="text" class="d-none" name="form-anti-honeypot" value="">
                            <div class="row">
                                <div class="col-sm-12 animated fadeInUp" data-animate="fadeInUp" data-delay="1" style="visibility: visible; animation-delay: 1s;">
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
        </div><!-- .block @e  -->
    </div>
</section>
@endsection