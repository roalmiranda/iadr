<div class="header-main">
    <div class="header-container container">
        <div class="header-wrap">
            <!-- Logo @s -->
            <div class="header-logo logo animated" data-animate="fadeInDown" data-delay=".65">
                <a href="/" class="logo-link">
                    <img class="logo-dark" src="{{ asset('imagesiadr/logo/LogoIADR1.png') }}" style="height: 70px" srcset="{{ asset('imagesiadr/logo/LogoIADR1.png') }}" alt="logo">
                    <img class="logo-light" src="{{ asset('imagesiadr/logo/LogoIADR1.png') }}" style="height: 70px" srcset="{{ asset('imagesiadr/logo/LogoIADR1.png') }}" alt="logo">
                </a>
            </div>
            <!-- Menu Toogle @s -->
            <div class="header-nav-toggle">
                <a href="#" class="navbar-toggle" data-menu-toggle="header-menu">
                    <div class="toggle-line">
                        <span></span>
                    </div>
                </a>
            </div>
            <!-- Menu @s -->
            <div class="header-navbar header-navbar-s1">
                <nav class="header-menu" id="header-menu">
                    <ul class="menu animated" data-animate="fadeInDown" data-delay=".75">
                        <li class="menu-item"><a class="menu-link nav-link" href="/">Inicio</a></li>
                        <li class="menu-item"><a class="menu-link nav-link" href="{{route('about')}}">Quienes Somos</a></li>
                        <li class="menu-item"><a class="menu-link nav-link" href="/eventos">Eventos</a></li>
                        <li class="menu-item"><a class="menu-link nav-link" href="/articulos">Árticulos</a></li>
                        <li class="menu-item"><a class="menu-link nav-link" href="/membresia">Membresía</a></li>
                        {{-- <li class="menu-item has-sub">
                            <a class="menu-link nav-link menu-toggle" href="#">Membresía</a>
                            <ul class="menu-sub menu-drop">
                                <li class="menu-item"><a class="menu-link nav-link" href="#media-partner">Como ser Miembro</a></li>
                                <li class="menu-item"><a class="menu-link nav-link" href="#blog">Beneficios de la membresía</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    <ul class="menu-btns menu-btns-s3 align-items-center animated fadeInDown" data-animate="fadeInDown" data-delay=".85" style="visibility: visible; animation-delay: 0.85s;">
                        <li>
                            <a href="/contacto" class="btn btn-md btn-primary btn-outline">
                                <span>Contacto</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div><!-- .header-navbar @e -->
        </div>
    </div>
</div>