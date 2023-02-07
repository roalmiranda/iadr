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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Artículos</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > Artículos</p>
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
<section class="section pb-5" style="padding-top: 50px;">
    <div class="container">
        <h6 class="title title-xs title-s1 tc-primary animated" data-animate="fadeInUp" data-delay=".1">Lista</h6>
        <h2 class="title animated" data-animate="fadeInUp" data-delay=".2">Artículos</h2>
        <div class="nk-block">
            <form action="form/subscribe.php" class="nk-form-submit" method="post" novalidate="novalidate">
                <div class="field-inline field-inline-round field-inline-s2-sm bg-light-alt">
                    <div class="field-wrap">
                        <input class="input-solid input-solid-md required email" type="text" name="contact-email" placeholder="Escribe tu palabra clave">
                        <input type="text" class="d-none" name="form-anti-honeypot" value="">
                    </div>
                    <div class="submit-wrap">
                        <button class="btn btn-md btn-round btn-dark h-100">Buscar</button>
                    </div>
                </div>
                <div class="form-results"></div>
            </form>
            {{-- <ul class="row gaps gy-5 pt-5">
                <li class="col-md-6 col-xl-12">
                    <div class="border rounded-4 p-5 h-100 animated fadeInUp" data-animate="fadeInUp" data-delay=".75" style="visibility: visible; animation-delay: 0.75s;">
                        <div class="d-flex flex-column flex-xl-row align-items-xl-center h-100">
                            <div class="col-xl-3 pb-2 pb-xl-0">
                                <h4 class="text-base">Lending Capabilites asdas da  ds sd </h4>
                            </div>
                            <div class="col-xl-6">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elit, urna, consectetur ultrices pharetra mauris. Nunc, id adipiscing lorem amet, porta cras faucibus etiam.</p>
                            </div>
                            <div class="col-xl-3 d-flex justify-content-xl-end mt-auto mt-xl-0 pt-3 pt-xl-0">
                                <ul class="btn-grp">
                                    <li><a href="#" class="btn btn-md btn-outline btn-primary btn-round btn-nocap"><span>Ver más</span> <em class="ms-3 fas fa-arrow-right"></em></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
            </ul> --}}
        </div>
    </div>
</section>
<section class="section bg-white pt-0">
    <div class="container">
        <div class="nk-block nk-block-blog">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="blog">
                        <div class="blog-photo">
                            <img src="images/blog/a.jpg" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">12 Mar, 2022</a></li>
                                <li><a href="#">Blockchain</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="{{route('article.search', 'ronald')}}">The Intersection with Blockchain.</a></h4>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog">
                        <div class="blog-photo">
                            <img src="images/blog/b.jpg" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">12 Mar, 2022</a></li>
                                <li><a href="#">Blockchain</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">The Intersection with Blockchain.</a></h4>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog">
                        <div class="blog-photo">
                            <img src="images/blog/c.jpg" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">12 Mar, 2022</a></li>
                                <li><a href="#">Blockchain</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">The Intersection with Blockchain.</a></h4>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog">
                        <div class="blog-photo">
                            <img src="images/blog/d.jpg" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">12 Mar, 2022</a></li>
                                <li><a href="#">Blockchain</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">The Intersection with Blockchain.</a></h4>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog">
                        <div class="blog-photo">
                            <img src="images/blog/e.jpg" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">12 Mar, 2022</a></li>
                                <li><a href="#">Blockchain</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">The Intersection with Blockchain.</a></h4>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->
                <div class="col-lg-4 col-sm-6">
                    <div class="blog">
                        <div class="blog-photo">
                            <img src="images/blog/f.jpg" alt="blog-thumb">
                        </div>
                        <div class="blog-text">
                            <ul class="blog-meta">
                                <li><a href="#">12 Mar, 2022</a></li>
                                <li><a href="#">Blockchain</a></li>
                            </ul>
                            <h4 class="title title-sm"><a href="#">The Intersection with Blockchain.</a></h4>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste natus...</p>
                        </div>
                    </div><!-- .blog -->
                </div><!-- .col -->
            </div><!-- .row -->
            <nav class="w-100 d-flex">
                <ul class="pagination">
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><em class="icon ti ti-angle-right"></em></a></li>
                </ul>
            </nav>
        </div><!-- .nk-block -->
    </div><!-- .container -->
</section>
@endsection