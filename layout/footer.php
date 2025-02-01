<!-- start wpo-site-footer -->
<footer class="bg-secondary">
            <div class="wpo-upper-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-6 col-md-6 col-sm-6">
                            <div class="widget about-widget">
                                <div class="logo widget-title">
                                    <img src="{{ asset('assets/img/logo.jpg') }}" alt="Logo"  width="40%">
                                </div>
                                <p>
                                </p>
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-2 col-md-3 col-sm-6">
                            <div class="widget link-widget">
                                <div class="widget-title">
                                    <h3>Liens utiles</h3>
                                </div>
                                <ul>
                                    @foreach(Menugermans() as $Menu)
                                    <li># <a href="{{ url('') }}/{{$Menu->url}}" target="$Menu->target">{!! $Menu->title !!}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-lg-offset-1 col-md-3 col-sm-6">
                            <div class="widget market-widget wpo-service-link-widget">
                                <div class="widget-title">
                                    <h3>Contact</h3>
                                </div>
                                <p> Copyright &copy; tous droits réservés <a href="{{ url('/') }}" target="_blank" ><b style="color:white;">{{ Setting()->SiteTitle }}</b></a></p>
                                <div class="contact-ft">
                                    <ul>
                                        <li><i class="fi flaticon-pin"></i>{{ Setting()->Location }}</li>
                                        <li><i class="fi flaticon-call"></i>+255 2723229756 / 0596314449</li>
                                        <li><i class="fi flaticon-envelope"></i> infos@ongciurbaine.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>
            <div class="wpo-lower-footer">
                <div class="container">
                    <div class="row">
                        <div class="col col-xs-12">
                            <p class="copyright">Site développé par <b>ORICORP</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end wpo-site-footer -->
         