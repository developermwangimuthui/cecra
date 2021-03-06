<link href="../../../../public/css/app.css" rel="stylesheet" type="text/css">
<footer class="footer fi">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-about">
                        <div class="footer-logo">
                            <!--<img width="70%" src="img/ui/Picture1.jpg" alt=""/>-->
                            <h2 style=" color: #01cae4;"> {{ trans('sentence.footer.closeToMe') }} </h2>
                        </div>
                        <div class="footer-about-content">
                            <!-- Negocios Locales is the digital place for all the shops -->
                            <p>{{ trans('sentence.footer.closeToMeText') }}</p>
                            <div class="social-icon"> <a href="https://www.facebook.com/Cerca-de-Mi-101394868383256" target="_blank"><img src="../../../../assets/images/icono-facebook.png" alt="" width="22" height="22"/> </a><a href="https://www.instagram.com/cerca_de_mi_es/" target="_blank"><img src="../../../../assets/images/icono-instagram.png" alt="" width="22" height="22"/></a>
							     <a href="https://twitter.com/mi_cerca" target="_blank"><img src="../../../../assets/images/icono-twitter.png" alt="" width="23" height="22"/></a>

 
                          </div>
                        </div>
                    </div>
                    <!-- /Footer Widget -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">{{ trans('sentence.footer.partner') }}</h2>
                        <ul>
                            <li><a href="{{ route('bus/signup') }}"><i ></i>{{ trans('sentence.footer.createYourBusiness') }}</a></li>
                            <li><a href="{{ route('bus/signin') }}"><i ></i>{{ trans('sentence.footer.signInForBusiness') }}</a></li>
                            <li><a href="{{ route('how-to-create-your-business') }}"><i ></i>
                                    {{ trans('sentence.footer.howToCreateYourBusiness') }}
                                </a>
                            </li>

                            <li><i ></i> {{ trans('sentence.footer.pricing') }}</li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <!-- Footer Widget -->
                    <div class="footer-widget footer-menu">
                        <h2 class="footer-title">{{ trans('sentence.footer.categories') }}</h2>
                        <ul>
                            <li><i ></i> {{ trans('sentence.footer.clothes') }}</li>
                            <li><i ></i> {{ trans('sentence.footer.electronics') }}</li>
                            <li><i ></i> {{ trans('sentence.footer.gaming') }}</li>
                            <li><i ></i> {{ trans('sentence.footer.computing') }}</li>
                            <li><i ></i>{{ trans('sentence.footer.moreCategories') }}</li>
                        </ul>
                    </div>
                    <!-- /Footer Widget -->

                </div>

                <div class="col-lg-3 col-md-6">

                    <!-- Footer Widget -->
                    <div class="footer-widget footer-contact">
                        <h2 class="footer-title">{{ trans('sentence.footer.contactUs') }}</h2>
                        <div class="footer-contact-info">
                            <p>
                                <i></i>
                                <a href="tel:+34 673 74 74 46" class="text-white">+34 673 74 74 4</a>
                            </p>
                            <p>
                                <i></i>
                                {{ trans('sentence.footer.contactUs') }}
                            </p>
                            <p class="mb-0">
                                <i></i>
                                <a href="mailto:info@cercademi.me" class="text-white" >info@cercademi.me</a>
                            </p>
                        </div>
                    </div>
                    <!-- /Footer Widget -->

                </div>

            </div>
        </div>
    </div>
    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container-fluid">
            <!-- Copyright -->
            <div class="copyright">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <!-- Copyright Menu -->
                        <div class="copyright-menu">
                            <ul class="policy-menu">
                                <li><a href="term-condition.html">{{ trans('sentence.footer.copyright') }} ©</a></li>
                             
                            </ul>
                        </div>
                        <!-- /Copyright Menu -->

                    </div>
                </div>
            </div>
            <!-- /Copyright -->

        </div>
    </div>
    <!-- /Footer Bottom -->

</footer>
