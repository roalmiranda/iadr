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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Eventos</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > Eventos</p>
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
<!-- // -->
<section class="section pt-5" id="eventos"><div class="container container-xxl">
    <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Lista</h6>
    <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Eventos</h2>
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-xl-8">
                <div class="news-item news-featured animated fadeInUp" data-animate="fadeInUp" data-delay=".4" style="visibility: visible; animation-delay: 0.4s;">
                    <div class="news-thumb">
                        <img class="w-100 h-100" src="images/blockchain/blog/large-a.jpg" alt="">
                    </div>
                    <div class="news-excerpt">
                        <ul class="news-tags">
                            <li><a class="link-primary" href="#">Industry</a></li>
                        </ul>
                        <h3>Top 7 technologies that power the Metaverse</h3>
                        <p class="lead">Sapien, nibh nullam volutpat orci metus elementum. Sit molestie porta lobortis pellentesque gravida. Dolor rhoncus odio massa fermentum.</p>
                        <ul class="news-meta">
                            <li>Published Dec 13, 2021</li>
                        </ul>
                        <a href="#about" class="btn btn-md btn-grad">
                            <q>Ver más</q>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6 order-xl-2">
                <div class="news-item animated fadeInUp" data-animate="fadeInUp" data-delay=".6" style="visibility: visible; animation-delay: 0.6s;">
                    <div class="news-thumb">
                        <img class="w-100" src="images/blockchain/blog/a.jpg" alt="">
                    </div>
                    <div class="news-excerpt">
                        <ul class="news-tags">
                            <li><a class="link-success" href="#">Knowledge</a></li>
                        </ul>
                        <h5>What Is a Blockchain Consensus Algorithm to secure connections?</h5>
                        <ul class="news-meta">
                            <li>Published Dec 13, 2021</li>
                        </ul>
                        <a href="#about" class="btn btn-md btn-grad">
                            <q>Ver más</q>
                        </a>
                    </div>
                </div>
            </div>
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
                        <a href="#about" class="btn btn-md btn-grad">
                            <q>Ver más</q>
                        </a>
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
                        <a href="#about" class="btn btn-md btn-grad">
                            <q>Ver más</q>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection