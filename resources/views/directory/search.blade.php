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
                                        <p class="tc-default"><a href="/">Inicio</a> > Directorio</p>
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
<section class="section pt-5">
    <div class="container">
        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Lista</h6>
        <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Eventos</h2>
        <div class="nk-block nk-block-team-featured team-featured">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <div class="team-featured-photo tc-light">
                        <img src="{{asset('images/team/large-a.jpg')}}" alt="team">
                        <h5 class="team-featured-info">David Metthew<span>Chairman of ICOX and Entrepreneur</span></h5>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="team-featured-cont">
                        <h6 class="title title-xs title-light">behind the idea</h6>
                        <h2 class="title title-lg title-dark">The Founder</h2>
                        <p>ICOx Crypto is founded by David Metthew who is young entrepreneur &amp; full stack-developer. He is totam rem aperiam, et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit. Quam nihil molestiae illum.</p>
                        <ul class="social pdb-l justify-content-center">
                            <li><a href="#"><em class="social-icon fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="social-icon fab fa-twitter"></em></a></li>
                            <li><a href="#"><em class="social-icon fab fa-youtube"></em></a></li>
                            <li><a href="#"><em class="social-icon fab fa-github"></em></a></li>
                        </ul>
                    </div>
                </div>
            </div><!-- .row -->
        </div>
        <!-- Block @e -->
    </div>
</section>
<section class="section section-team bg-light-alt">
    <div class="container">
        <!-- Section Head @s -->
        <div class="section-head text-center wide-auto">
            <h2 class="title title-lg title-dark">Logros Profesionales</h2>
        </div><!-- .section-head @e -->
        <!-- Block @s -->
        <div class="nk-block nk-block-team-list team-list">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="team">
                        <div class="team-photo team-photo-md">
                            <img src="{{asset('images/team/a.jpg')}}" alt="team">
                            <a href="#team-popup-1" class="team-show content-popup"></a>
                            <ul class="team-social">
                                <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                                <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            </ul>
                        </div>
                        <h5 class="team-name title title-sm">Louis Baker</h5>
                        <span class="team-position">CEO &amp; Lead Blockchain</span>
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
                                    <h3 class="team-name title title-lg pt-4">Louis Baker</h3>
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
            </div><!-- .row -->
        </div>
        <!-- Block @r -->
    </div>
</section>
@endsection