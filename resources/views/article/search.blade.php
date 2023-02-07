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
                                    <h2 class="title title-xl-2 animated fadeInUp tc-primary" data-animate="fadeInUp" data-delay="1.25" style="visibility: visible; animation-delay: 1.25s;">Articulo</h2>
                                    <b class="animated fadeInUp" data-animate="fadeInUp" data-delay="1.25">
                                        <p class="tc-default"><a href="/">Inicio</a> > <a href="/eventos">Articulos</a></p>
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
<section class="section bg-white pt-5">
    <div class="container">
        <div class="nk-block nk-block-blog">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details">
                        <div class="blog-featured">
                            <img class="round" src="{{asset('images/blog/large-a.jpg')}}" alt="featured">
                        </div>
                        <ul class="blog-meta">
                            <li><a href="#">12 Mar, 2022</a></li>
                            <li><a href="#">Blockchain</a></li>
                        </ul>
                        <div class="blog-content">
                            <h2 class="title"><a href="#">The Intersection with Blockchain.</a></h2>
                            <p>Blockchain Meets Energy Surplus of electrical energy is sometimes ut perspiciatis unde omnis iste naat vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                            <p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis.</p>
                            <p>Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                        </div>
                        <ul class="blog-tags">
                            <li><a href="#">bitcoin</a></li>
                            <li><a href="#">tokens</a></li>
                        </ul>
                        <div class="blog-comment">
                            <h4 class="title title-md">3 Comments</h4>
                            <ul class="comment-list">
                                <li class="comment-wrap">
                                    <div class="comment-item">
                                        <div class="comment-photo">
                                            <img src="images/team/sm-a.jpg" alt="img">
                                        </div>
                                        <div class="comment-content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="comment-info">
                                                    <h6 class="title title-xs">Eric Reyes</h6>
                                                    <a href="#" class="comment-time">MAY 22, 2022 AT 7:49 AM</a>
                                                </div>
                                                <div class="comment-Reply">
                                                    <a class="link" href="#"><em class="link-icon link-icon-sm fa fa-reply"></em> <span>Reply</span></a>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>Blockchain Meets Energy Surplus of elec trical energy is some times ut perspi ciatis unde omnis iste naat vero eos et accu samus et iusto odio dignis simos.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-photo">
                                            <img src="images/team/sm-b.jpg" alt="img">
                                        </div>
                                        <div class="comment-content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="comment-info">
                                                    <h6 class="title title-xs">Eric Reyes</h6>
                                                    <a href="#" class="comment-time">MAY 22, 2022 AT 7:49 AM</a>
                                                </div>
                                                <div class="comment-Reply">
                                                    <a class="link" href="#"><em class="link-icon link-icon-sm fa fa-reply"></em> <span>Reply</span></a>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>Blockchain Meets Energy Surplus of elec trical energy is some times ut perspi ciatis unde omnis iste naat vero eos et accu samus et iusto odio dignis simos.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-item">
                                        <div class="comment-photo">
                                            <img src="images/team/sm-c.jpg" alt="img">
                                        </div>
                                        <div class="comment-content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="comment-info">
                                                    <h6 class="title title-xs">Eric Reyes</h6>
                                                    <a href="#" class="comment-time">MAY 22, 2022 AT 7:49 AM</a>
                                                </div>
                                                <div class="comment-Reply">
                                                    <a class="link" href="#"><em class="link-icon link-icon-sm fa fa-reply"></em> <span>Reply</span></a>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>Blockchain Meets Energy Surplus of elec trical energy is some times ut perspi ciatis unde omnis iste naat vero eos et accu samus et iusto odio dignis simos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="comment-wrap">
                                    <div class="comment-item">
                                        <div class="comment-photo">
                                            <img src="images/team/sm-d.jpg" alt="img">
                                        </div>
                                        <div class="comment-content">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="comment-info">
                                                    <h6 class="title title-xs">Eric Reyes</h6>
                                                    <a href="#" class="comment-time">MAY 22, 2022 AT 7:49 AM</a>
                                                </div>
                                                <div class="comment-Reply">
                                                    <a class="link" href="#"><em class="link-icon link-icon-sm fa fa-reply"></em> <span>Reply</span></a>
                                                </div>
                                            </div>
                                            <div class="comment-text">
                                                <p>Blockchain Meets Energy Surplus of elec trical energy is some times ut perspi ciatis unde omnis iste naat vero eos et accu samus et iusto odio dignis simos.</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <h4 class="title title-md">Leave A Comment</h4>
                            <form action="#" class="form-validate" novalidate="novalidate">
                                <div class="field-item">
                                    <label class="field-label">Your Name</label>
                                    <div class="field-wrap">
                                        <input name="your-name" type="text" class="input-bordered" id="your-name" required="">
                                    </div>
                                </div>
                                <div class="field-item">
                                    <label class="field-label">Your Email</label>
                                    <div class="field-wrap">
                                        <input name="your-email" type="text" class="input-bordered" id="your-email" required="">
                                    </div>
                                </div>
                                <div class="field-item">
                                    <label class="field-label">Your Comment</label>
                                    <div class="field-wrap">
                                        <textarea name="your-comment" class="input-bordered input-textarea" required=""></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-grad">Comment</button>
                            </form>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-lg-4">
                    <div class="sidebar ms-lg-4 mt-5 mt-lg-0">
                        <div class="wgs wgs-search">
                            <form action="#" class="field-inline">
                                <input type="text" placeholder="Search Keyword" class="input-bordered">
                                <button class="btn btn-primary btn-icon"><em class="ti ti-search"></em></button>
                            </form>
                        </div>
                        <div class="wgs wgs-category">
                            <h6 class="wgs-title">Categoria</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links wgs-links-category">
                                    <li><a href="#">Ortodoncia</a></li>
                                    <li><a href="#">Endodoncia</a></li>
                                    <li><a href="#">Cirugia Bucal</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wgs wgs-tags">
                            <h6 class="wgs-title">Tags</h6>
                            <div class="wgs-body">
                                <ul class="wgs-links wgs-links-tags">
                                    <li><a href="#">ethereum</a></li>
                                    <li><a href="#">bitcoin</a></li>
                                    <li><a href="#">released</a></li>
                                    <li><a href="#">tokens</a></li>
                                    <li><a href="#">roadmap</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="wgs wgs-cta bg-theme tc-light round">
                            <div class="wgs-body">
                                <div class="title title-sm"><b>¿Cómo podemos ayudarte?</b></div>
                                <p>Póngase en contacto con nuestro equipo de soporte si necesita ayuda o tiene alguna pregunta.</p>
                                <a href="/contacto" class="btn btn-md btn-light">Contáctenos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- .row -->
        </div><!-- .nk-block -->
    </div><!-- .container -->
</section>
@endsection