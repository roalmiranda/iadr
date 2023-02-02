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
                                            <a href="#" class="btn btn-md btn-grad">
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
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">La IADR (International Association for Dental Research) es una organización internacional sin fines de lucro dedicada a la promoción de la investigación dental y la mejora de la salud oral. Fundada en 1920, cuenta con más de 11,000 miembros en todo el mundo y organiza una conferencia anual donde se presentan los últimos avances en investigación dental.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-white">
    <div class="container">
        <!-- Block @s -->
        <div class="nk-block nk-block-lg nk-block-features-s2">
            <div class="row align-items-center flex-row-reverse gutter-vr-30px">
                <div class="col-md-6">
                    <div class="gfx animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="images/gfx/gfx-s-light.png" alt="gfx">
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <!-- Section Head @s -->
                    <div class="nk-block-text">
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".2">Power of Blockchain</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".3">Tokenization Benefits</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".5">Cryptocurrencies are Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium laudantium, totam rem.</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".6">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciun quis nostrut.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
        <!-- Block @s -->
        <div class="nk-block nk-block-lg nk-block-features-s2">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-md-6">
                    <div class="gfx animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="images/gfx/gfx-t-light.png" alt="gfx">
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <!-- Section Head @s -->
                    <div class="nk-block-text">
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".2">Global Community</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".3">The ICO Community</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">Tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".5">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
        <!-- Block @s -->
        <div class="nk-block nk-block-features-s2">
            <div class="row align-items-center flex-row-reverse gutter-vr-30px">
                <div class="col-md-6">
                    <div class="gfx animated" data-animate="fadeInUp" data-delay=".1">
                        <img src="images/gfx/gfx-u-light.png" alt="gfx">
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <!-- Section Head @s -->
                    <div class="nk-block-text">
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".2">Ensure A Safe</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".3">Adaptive Smart Contracts</h2>
                        <p class="animated" data-animate="fadeInUp" data-delay=".4">Mostly due to sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".5">Cryptocurrencies are Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p class="animated" data-animate="fadeInUp" data-delay=".6">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciun quis nostrut.</p>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-light" id="why">
    <div class="background-shape bs-reverse"></div>
    <div class="container">
        <div class="section-head section-head-s9 wide-sm">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">How it Work</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Best Features</h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".3">The ICO Crypto Team combines a passion for esports, industry experise &amp; proven record in finance, development, marketing.</p>
        </div>
        <!-- Block @s -->
        <div class="nk-block">
            <div class="row gutter-vr-40px justify-content-center">
                <div class="col-lg-4 col-md-4">
                    <div class="feature feature-s8 feature-s8-alt feature-center card card-full-lg card-md animated" data-animate="fadeInUp" data-delay=".4">
                        <div class="feature-icon feature-icon-lg feature-icon-lg-s2">
                            <img src="images/icons/icon-h.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s8">
                            <h4 class="title title-sm title-thin title-s5"><span>Ultra Fast &amp; Secure </span><span>Instant Private Transaction</span></h4>
                            <p>The Smart Asset Blockcjain os starter &amp; more open with lorem Ipsum is simply text of the crypto.</p>
                            <a href="#" class="link link-primary link-feature-s1"><em class="link-icon icon-circle icon-circle-md ti ti-arrow-right"></em></a>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-4">
                    <div class="feature feature-s8 feature-s8-alt feature-center card card-full-lg card-md animated" data-animate="fadeInUp" data-delay=".5">
                        <div class="feature-icon feature-icon-lg feature-icon-lg-s2">
                            <img src="images/icons/icon-i.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s8">
                            <h4 class="title title-sm title-thin title-s5"><span>Highly Scalable </span><span>Limitless Applications</span></h4>
                            <p>The Smart Asset Blockcjain os starter &amp; more open with lorem Ipsum is simply text of the crypto.</p>
                            <a href="#" class="link link-primary link-feature-s1"><em class="link-icon icon-circle icon-circle-md ti ti-arrow-right"></em></a>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 col-md-4">
                    <div class="feature feature-s8 feature-s8-alt feature-center card card-full-lg card-md animated" data-animate="fadeInUp" data-delay=".6">
                        <div class="feature-icon feature-icon-lg feature-icon-lg-s2">
                            <img src="images/icons/icon-j.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s8">
                            <h4 class="title title-sm title-thin title-s5"><span>Reliable &amp; Low Cost </span><span>Instant Private Transaction</span></h4>
                            <p>The Smart Asset Blockcjain os starter &amp; more open with lorem Ipsum is simply text of the crypto.</p>
                            <a href="#" class="link link-primary link-feature-s1"><em class="link-icon icon-circle icon-circle-md ti ti-arrow-right"></em></a>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
            <div class="d-flex justify-content-center pdt-r">
                <ul class="btn-grp animated" data-animate="fadeInUp" data-delay=".7">
                    <li><a href="#" class="btn btn-md btn-grad">Get a Wallet</a></li>
                    <li><a href="#" class="btn btn-md btn-outline btn-grad on-bg-light">Download Whitepaper</a></li>
                </ul>
            </div>
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-white" id="benifits">
    <div class="container">
        <div class="section-head section-head-s9 wide-sm">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">ICO Crypto Feature</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Ecosystem key features</h2>
            <p class="animated" data-animate="fadeInUp" data-delay=".3">The ICO Crypto Team combines a passion for esports, industry experise &amp; proven record in finance, development, marketing.</p>
        </div>
        <!-- Block @s -->
        <div class="nk-block nk-block-features">
            <div class="row gutter-vr-60px gutter-100px">
                <div class="col-lg-6">
                    <div class="feature feature-s12 animated" data-animate="fadeInUp" data-delay=".4">
                        <div class="feature-icon feature-icon-lg-s1 m-lg-0">
                            <img src="images/icons/icon-d-light.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s2">
                            <p>ICO Crypto makes <strong> you the sole owner of a secure </strong> decentralize registry for your collection an products</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="feature feature-s12 animated" data-animate="fadeInUp" data-delay=".5">
                        <div class="feature-icon feature-icon-lg-s1 m-lg-0">
                            <img src="images/icons/icon-e-light.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s2">
                            <p>The registry is a <strong>tamper-proof</strong> that uses <strong>dolor sit amet,</strong> conse ctetur sed eiusmod tempor incidid labore Lorem consectetur adipiscing.</p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="feature feature-s12 animated" data-animate="fadeInUp" data-delay=".6">
                        <div class="feature-icon feature-icon-lg-s1 m-lg-0">
                            <img src="images/icons/icon-f-light.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s2">
                            <p>Provide your customer with a <strong>lorem ipsum dolor sit amet, conse ctetur sed</strong> eiusmod tempor incidid labore Lorem ipsum dolor. </p>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="feature feature-s12 animated" data-animate="fadeInUp" data-delay=".7">
                        <div class="feature-icon feature-icon-lg-s1 m-lg-0">
                            <img src="images/icons/icon-g-light.png" alt="feature">
                        </div>
                        <div class="feature-text feature-text-s2">
                            <p>ICO Crypto the prowess of blockchain <strong>labore et dolore</strong> dolor sit amet, conse <strong>Ctetur sed</strong> eiusmod tempor labore dolor adipiscing.</p>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @s -->
    </div>
</section>
<!-- // -->
<section class="section bg-light">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">ICO Market</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Introducing the ICO Marketplace</h2>
            <div class="wide-sm">
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Blockchain-powered marketplace which connects buyer and Lorem ipsum dolor sit amet, consectetur adipiscing.</p>
            </div>
        </div>
        <!-- Block @s -->
        <div class="nk-block nk-block-text-wrap">
            <div class="row align-items-center gutter-vr-30px">
                <div class="col-lg-6">
                    <div class="nk-block-img animated" data-animate="fadeInUp" data-delay=".4">
                        <img src="images/jasmine/laptop-mobile-a.png" alt="app">
                    </div>
                </div><!-- .col -->
                <div class="col-lg-6">
                    <div class="nk-block-text">
                        <ul class="list list-check list-check-s3">
                            <li class="animated" data-animate="fadeInUp" data-delay=".5">The Platform will earn premium libero tempore, cum soluta nobis keep their digital coins est eligendi optio.</li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".55">At aut reiciendis voluptatibus maiores alias conse quatur aut perferendis. Contributor payouts perfectly simple and easy</li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".6">Ut enim ad minim veniam, quis nostrud exerc itation identification is stored in an encrypted ullamco laboris nisi.</li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".65">Owners of cryptocurrency keep their digital coins in ICO digital wallet. A coin-holder’s identification is stored in an encrypted address that they have control.</li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-white" id="token">
    <!-- Block @s -->
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Token</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Token Sale</h2>
            <div class="wide-sm">
                <p class="animated" data-animate="fadeInUp" data-delay=".3">The tokens will be available for transfer thar is rorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <div class="nk-block nk-block-token">
            <div class="row gutter-vr-30px">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="token-stage text-center animated" data-animate="fadeInUp" data-delay=".4">
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
                            <div class="token-stage text-center animated" data-animate="fadeInUp" data-delay=".5">
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
                            <div class="token-stage text-center animated" data-animate="fadeInUp" data-delay=".6">
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
                    <div class="token-action-box text-center animated" data-animate="fadeInUp" data-delay=".7">
                        <div class="token-action-title">Join Our <br> Pre-Sale List</div>
                        <div class="token-action-date"><strong>Pre-Sale Start at</strong> 03 July 2022</div>
                        <div class="token-action-btn">
                            <a href="#" class="btn btn-lg btn-grad">Signup &amp; Join</a>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-5">
                    <table class="table table-s1 table-token table-token-s1 animated" data-animate="fadeInUp" data-delay=".8">
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
                    <h3 class="sub-heading-s2 animated" data-animate="fadeInUp" data-delay=".1">Token Allocation</h3>
                    <div class="token-bar-chart animated" data-animate="fadeInUp" data-delay=".2">
                        <div class="token-bar-item tbic1" data-percent="8">
                            <div class="token-bar-txt">
                                <span>8%</span>
                                <span>Bounty</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic2" data-percent="12">
                            <div class="token-bar-txt">
                                <span>12%</span>
                                <span>Presale</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic3" data-percent="20">
                            <div class="token-bar-txt">
                                <span>20%</span>
                                <span>Team &amp; Advisor</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic4" data-percent="25">
                            <div class="token-bar-txt">
                                <span>25%</span>
                                <span>Reserve Fund</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic5" data-percent="35">
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
                    <h3 class="sub-heading-s2 animated" data-animate="fadeInUp" data-delay=".3">Operating Allocation</h3>
                    <div class="token-bar-chart animated" data-animate="fadeInUp" data-delay=".4">
                        <div class="token-bar-item tbic5" data-percent="13">
                            <div class="token-bar-txt">
                                <span>13%</span>
                                <span>Admin &amp; Ops</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic4" data-percent="17">
                            <div class="token-bar-txt">
                                <span>17%</span>
                                <span>Legal &amp; Advisory</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic3" data-percent="25">
                            <div class="token-bar-txt">
                                <span>25%</span>
                                <span>Marketing &amp; Sales</span>
                            </div>
                        </div>
                        <div class="token-bar-item tbic2" data-percent="45">
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
<!-- // -->
<section class="section bg-light">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Download Documents</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Read Our Documents</h2>
            <div class="wide-sm">
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Here is our full documents that help you to understand about us. And lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <!-- Block @s -->
        <div class="nk-block nk-block-features">
            <div class="row gutter-vr-30px">
                <div class="col-xl-3 col-sm-6 col-mb-10">
                    <div class="doc doc-s2 bg-white animated" data-animate="fadeInUp" data-delay=".4">
                        <div class="doc-photo no-hover">
                            <img src="images/docs/alt-sm-a.png" alt="doc">
                        </div>
                        <div class="doc-text">
                            <h6 class="doc-title title-xs-alt">Whitepaper</h6>
                            <ul class="btn-grp gutter-10px">
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">ENG</a></li>
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">RUS</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-xl-3 col-sm-6 col-mb-10">
                    <div class="doc doc-s2 bg-white animated" data-animate="fadeInUp" data-delay=".5">
                        <div class="doc-photo no-hover">
                            <img src="images/docs/alt-sm-b.png" alt="doc">
                        </div>
                        <div class="doc-text">
                            <h6 class="doc-title title-xs-alt">OnePager</h6>
                            <ul class="btn-grp gutter-10px">
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">ENG</a></li>
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">RUS</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-xl-3 col-sm-6 col-mb-10">
                    <div class="doc doc-s2 bg-white animated" data-animate="fadeInUp" data-delay=".6">
                        <div class="doc-photo no-hover">
                            <img src="images/docs/alt-sm-c.png" alt="doc">
                        </div>
                        <div class="doc-text">
                            <h6 class="doc-title title-xs-alt">Privacy Policy</h6>
                            <ul class="btn-grp gutter-10px">
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">ENG</a></li>
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">RUS</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-xl-3 col-sm-6 col-mb-10">
                    <div class="doc doc-s2 bg-white animated" data-animate="fadeInUp" data-delay=".7">
                        <div class="doc-photo no-hover">
                            <img src="images/docs/alt-sm-d.png" alt="doc">
                        </div>
                        <div class="doc-text">
                            <h6 class="doc-title title-xs-alt">Terms of Sale</h6>
                            <ul class="btn-grp gutter-10px">
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">ENG</a></li>
                                <li><a class="btn btn-outline btn-xxs btn-auto btn-light" href="#">RUS</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-white" id="roadmap">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Timeline</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Road Map</h2>
            <div class="wide-sm">
                <p class="animated" data-animate="fadeInUp" data-delay=".3">Our team working hardly to make archive lorem ipsum dolor sit amet, consectetur amet, consectetur adipiscing elit.</p>
            </div>
        </div>
        <!-- Section Head @s -->
        <!-- Block @s -->
        <div class="nk-block nk-block-left">
            <div class="roadmap-all mgb-m50 animated" data-animate="fadeInUp" data-delay=".4">
                <div class="roadmap-wrap roadmap-wrap-done roadmap-wrap-s1 roadmap-wrap-s1-alt mb-0 ms-0">
                    <div class="row g-0">
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt roadmap-done text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q1</span>
                                        <span class="roadmap-title roadmap-title-s1">Concept</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Concept Generation</li>
                                        <li>Team Assemble</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt roadmap-done text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q2</span>
                                        <span class="roadmap-title roadmap-title-s1">Research</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Proving the concept can work</li>
                                        <li>Strategic Plan</li>
                                        <li>White paper conpletion</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt roadmap-done text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q1</span>
                                        <span class="roadmap-title roadmap-title-s1">Design</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Platform design and technical demonstration</li>
                                        <li>Building the MVP</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt roadmap-done text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q2</span>
                                        <span class="roadmap-title roadmap-title-s1">Pre-Sale</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Public financing &amp; Seed funding raised</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
                <div class="roadmap-wrap roadmap-wrap-s1 roadmap-wrap-s1-alt mb-0 ms-0">
                    <div class="row flex-row-reverse g-0">
                        <div class="col-lg">
                            <div class="roadmap roadmap-current roadmap-s1  roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q3</span>
                                        <span class="roadmap-title roadmap-title-s1">App Beta Test</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Private closed beta</li>
                                        <li>Open beta launched to public and improvement the app</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q4</span>
                                        <span class="roadmap-title roadmap-title-s1">Token Sale</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>ICO Press Tour</li>
                                        <li>Open global sales of ICOblock token</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q1</span>
                                        <span class="roadmap-title roadmap-title-s1">Alpha Test</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>In-house testing of functional</li>
                                        <li>Prototype published and linked to Ethereum blockchain with real-time scanning</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
                <div class="roadmap-wrap roadmap-wrap-s1 roadmap-wrap-s1-alt mb-lg-0 ms-0">
                    <div class="row g-0">
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q2</span>
                                        <span class="roadmap-title roadmap-title-s1">Crowdfunding Integration</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Smart contracts support creators</li>
                                        <li>Ethereum tokens support</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q3</span>
                                        <span class="roadmap-title roadmap-title-s1">Community Benefits</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Establishing global user base</li>
                                        <li>US start retailer selection</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1  roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q3</span>
                                        <span class="roadmap-title roadmap-title-s1">Hardware things</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Integration of third party controllers</li>
                                        <li>Marketplace cooperative module</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                        <div class="col-lg">
                            <div class="roadmap roadmap-s1 roadmap-s1-alt text-lg-center">
                                <div class="roadmap-step roadmap-step-s1">
                                    <div class="roadmap-head roadmap-head-s1">
                                        <span class="roadmap-time roadmap-time-s1">2022 Q1</span>
                                        <span class="roadmap-title roadmap-title-s1">More Operational</span>
                                    </div>
                                    <ul class="roadmap-step-list roadmap-step-list-s1">
                                        <li>Integration with Private Chains, More Coin in Wallet</li>
                                        <li>New services offered by members or business</li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .col -->
                    </div><!-- .row -->
                </div>
            </div>
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-light-alt" id="team">
    <div class="background-shape bs-right"></div>
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">MEET THE TEAM</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Executive team</h2>
            <div class="wide-sm">
                <p class="animated" data-animate="fadeInUp" data-delay=".3">The ICO Crypto Team combines a passion for esports, industry experise &amp; proven record in finance, development, marketing &amp; licensing.</p>
            </div>
        </div>
        <!-- Block @s -->
        <div class="nk-block nk-block-left nk-block-team-list team-list">
            <div class="row justify-content-start">
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay=".4">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-a.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Waylon Dalton</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay=".5">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-b.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Stefan Harary</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay=".6">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-c.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Moises Teare</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay=".7">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-d.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Gabriel Bernal</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
        <div class="nk-block nk-block-left nk-block-team-list">
            <div class="section-head section-head-sm">
                <h2 class="title-lg-2 animated" data-animate="fadeInUp" data-delay=".8">ADVISORS</h2>
            </div>
            <div class="row justify-content-start">
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay=".9">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-a.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Waylon Dalton</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay="1">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-b.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Stefan Harary</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-3 col-sm-6">
                    <div class="team team-s4 round bg-white ms-0 animated" data-animate="fadeInUp" data-delay="1.1">
                        <div class="team-photo team-photo-s1 round-full">
                            <img src="images/team/sq-c.jpg" alt="team" class="round-full">
                        </div>
                        <h5 class="team-name">Moises Teare</h5>
                        <span class="team-position tc-primary">CEO &amp; Lead Blockchain</span>
                        <div class="team-desc">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incide.</p>
                        </div>
                        <ul class="team-social team-social-s2">
                            <li><a href="#"><em class="fab fa-linkedin-in"></em></a></li>
                            <li><a href="#"><em class="fab fa-facebook-f"></em></a></li>
                            <li><a href="#"><em class="fab fa-twitter"></em></a></li>
                        </ul>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-white">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Partners</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Supported By</h2>
        </div>
        <!-- Block @s -->
        <div class="nk-block block-partners">
            <ul class="partner-list partner-list-left partner-list-s3 flex-wrap">
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".3">
                    <img src="images/partners/a-xs-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".35">
                    <img src="images/partners/b-xs-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".4">
                    <img src="images/partners/c-xs-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".45">
                    <img src="images/partners/d-xs-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".5">
                    <img src="images/partners/e-xs-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".55">
                    <img src="images/partners/a-xs-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".6">
                    <img src="images/partners/a-sm-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".65">
                    <img src="images/partners/b-sm-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".7">
                    <img src="images/partners/c-sm-alt.png" alt="partner">
                </li>
                <li class="partner-logo partner-logo-s2 animated" data-animate="fadeInUp" data-delay=".75">
                    <img src="images/partners/a-sm-alt.png" alt="partner">
                </li>
            </ul>
        </div>
        <!-- Block @e -->
    </div>
</section>
<!-- // -->
<section class="section bg-light" id="faqs">
    <div class="container">
        <div class="section-head section-head-s9 wide-md">
            <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">FAQ</h6>
            <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Frequently asked questions</h2>
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
                        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Contact</h6>
                        <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Get In Touch</h2>
                        <div class="class">
                            <p class="animated" data-animate="fadeInUp" data-delay=".3">Any question? Reach out to us and we’ll get back to you shortly.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-column justify-content-between h-100">
                        <ul class="contact-list contact-list-s2">
                            <li class="animated" data-animate="fadeInUp" data-delay=".4">
                                <em class="contact-icon contact-icon-s2 fas fa-phone"></em>
                                <div class="contact-text">
                                    <span>+44 0123 4567</span>
                                </div>
                            </li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".5">
                                <em class="contact-icon contact-icon-s2 fas fa-envelope"></em>
                                <div class="contact-text">
                                    <span>info@company.com</span>
                                </div>
                            </li>
                            <li class="animated" data-animate="fadeInUp" data-delay=".6">
                                <em class="contact-icon contact-icon-s2 fas fa-paper-plane"></em>
                                <div class="contact-text">
                                    <span>Join us on Telegram</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4 offset-lg-1">
                    <div class="gap-6x d-none d-lg-block"></div>
                    <div class="gap-4x d-none d-lg-block"></div>
                    <form id="contact-form-01" class="contact-form nk-form-submit" action="form/contact.php" method="post">
                        <div class="field-item field-item-s2 animated" data-animate="fadeInUp" data-delay=".7">
                            <input name="contact-name" type="text" class="input-bordered required" placeholder="Your Name">
                        </div>
                        <div class="field-item field-item-s2 animated" data-animate="fadeInUp" data-delay=".8">
                            <input name="contact-email" type="email" class="input-bordered required email" placeholder="Your Email">
                        </div>
                        <div class="field-item field-item-s2 animated" data-animate="fadeInUp" data-delay=".9">
                            <textarea name="contact-message" class="input-bordered input-textarea required" placeholder="Your Message"></textarea>
                        </div>
                        <input type="text" class="d-none" name="form-anti-honeypot" value="">
                        <div class="row">
                            <div class="col-sm-12 animated" data-animate="fadeInUp" data-delay="1">
                                <button type="submit" class="btn btn-s2 btn-md btn-grad">Submit</button>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-results"></div>
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