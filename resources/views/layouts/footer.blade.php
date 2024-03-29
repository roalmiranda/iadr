<footer class="nk-footer">
    <section class="section py-0">
        <div class="container">
            <div class="nk-block overflow-hidden">
                <div class="bg-grad-alt round subscribe-wrap tc-light animated" data-animate="fadeInUp" data-delay=".2">
                    <div class="row text-center text-md-start justify-content-center align-items-center gutter-vr-25px">
                        <div class="col-lg-6">
                            <div class="wide-auto-sm">
                                <h4 class="title-sm">
                                    ¿Aún no decidiste ser parte de nosotros?</h4>
                                <p>Puedes simplemente suscribirte a esta página para mantenerte actualizado.</p>
                                <p>Para recibir información relevante de nuestra asociación y novedades de actualidad científica, suscríbete ingresando tu email o entra en contacto para disipar cualquier duda que tengas. </p>
                            </div>
                        </div> 
                        <div class="col-lg-6">
                            <div class="gap-3x d-none d-lg-block"></div>
                            <form id="form1" method="post">
                                <div class="field-inline field-inline-s2 field-inline-s2-sm bg-white shadow-soft">
                                    <div class="field-wrap">
                                        <input class="input-solid input-solid-md required email" type="text" id="sub_email" name="sub_email" placeholder="Ingresa tu correo">
                                    </div>
                                    <div class="submit-wrap">
                                        <button class="btn btn-md btn-secondary sub-save-contact">Subscribirse</button>
                                        <button class="btn btn-md btn-info sub-save-load" disabled style="display:none;">Subscribiendo...</button>
                                    </div>
                                </div>
                                <div class="form-results"></div>
                            </form>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
        <div class="nk-ovm ovm-top ovm-h-50 bg-white bdb ov-h"></div>
    </section>
    <div class="section section-footer section-m bg-transparent">
        <div class="container">
            <div class="nk-block block-footer">
                <div class="row">
                    <div class="col">
                        <div class="wgs wgs-text text-center mb-3">
                            <ul class="social pdb-l justify-content-center">
                                <li title="Facebook IADR - Bolivia" class="animated" data-animate="fadeInUp" data-delay="0.5">
                                    <a href="https://www.facebook.com/OPIEBOLIVIA?mibextid=LQQJ4d" target="_blank">
                                        <em class="social-icon fab fa-facebook-f pt-2"></em>
                                    </a>
                                </li>
                                <li title="Instagram IADR - Bolivia" class="animated" data-animate="fadeInUp" data-delay="0.55">
                                    <a href="https://instagram.com/iadr.bolivia?igshid=YmMyMTA2M2Y=" target="_blank">
                                        <em class="social-icon fab fa-instagram bg-warning pt-2"></em>
                                    </a>
                                </li>
                                <li title="Youtube IADR - Bolivia" class="animated" data-animate="fadeInUp" data-delay="0.6">
                                    <a href="https://www.youtube.com/@iadrseccionbolivia8734" target="_blank">
                                        <em class="social-icon fab fa-youtube bg-danger pt-2"></em>
                                    </a>
                                </li>
                            </ul>
                            <a href="/" class="footer-logo">
                                <img src="{{ asset('imagesiadr/logo/logo_iadr_2024.png') }}" srcset="{{ asset('imagesiadr/logo/logo_iadr_2024.png 2x') }}" alt="logo" width="400">
                            </a>
                            <div class="copyright-text copyright-text-s3 pdt-m">
                                <p><span class="d-sm-block">Copyright &copy; {{date('Y')}} Todos los derechos reservados</p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <div class="nk-ovm shape-s-sm shape-center-bottom ov-h"></div>
    </div>
</footer>