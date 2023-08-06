<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zxx">
<!--<![endif]-->

@include('website.layouts.head')
<body>

<!-- Loader -->
<div class="loader-container">
    <div class="spinner">
        <div class="dot1"></div>
        <div class="dot2"></div>
    </div>
</div>
<!-- Header starts
======================================== -->
@include('website.layouts.header')
<!-- End of .header -->

@yield('content')

<!-- footer starts -->
@include('website.layouts.footer')
<!-- End of .page-footer -->


<!-- Privacy modal starts
================================= -->
<div class="modal fade full-width-modal privacy-terms-modal" id="privacy-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body">
                <div class="modal-title">
                    <h2 class="section-title text-center">Privacy Policy</h2>
                </div>
                <!-- End of .modal-title -->
                <img src="images/privacy-modal.jpg" alt="privacy modal image" class="img-fluid modal-feat-img">
                <h3>Nullam placerat, diam eu mattis imperdiet, purus urna iaculis ipsum, egestas varius magna orci at risus.
                    Duis finibus sit amet turpis sit amet luctus. </h3>
                <p>Phasellus eget nibh id lacus elementum tempus ac nec purus. Aenean et laoreet mauris, scelerisque varius
                    neque. Pellentesque nec tristique massa. Pellentesque tincidunt justo vel metus commodo dapibus.
                    Aenean lacus dui, dapibus sit amet odio et, volutpat elementum neque. Cras aliquam nec felis eu bibendum.
                    Praesent fermentum laoreet erat sit amet dictum. Nam vel urna et elit tempor pharetra. Donec suscipit
                    ac ante eget pellentesque. Pellentesque velit est, fermentum eu viverra non, lacinia vel nulla. Fusce
                    eget ornare odio.</p>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non
                    nisi convallis viverra. Proin in nunc varius lorem mattis dictum. Duis tincidunt dignissim volutpat.
                    Mauris sit amet mollis massa. Duis condimentum massa at orci ornare tempus. Praesent eu est id ante
                    posuere vestibulum a vitae urna.</p>
                <h3>Nullam placerat, diam eu mattis imperdiet, purus urna iaculis ipsum, egestas varius magna orci at risus.
                </h3>
                <p>Phasellus eget nibh id lacus elementum tempus ac nec purus. Aenean et laoreet mauris, scelerisque varius
                    neque. Pellentesque nec tristique massa. Pellentesque tincidunt justo vel metus commodo dapibus.
                    Aenean lacus dui, dapibus sit amet odio et, volutpat elementum neque. Cras aliquam nec felis eu bibendum.
                    Praesent fermentum laoreet erat sit amet dictum. Nam vel urna et elit tempor pharetra. Donec suscipit
                    ac ante eget pellentesque. Pellentesque velit est, fermentum eu viverra non, lacinia vel nulla. Fusce
                    eget ornare odio.</p>

                <h3>Nullam placerat, diam eu mattis imperdiet.</h3>
                <p>Phasellus eget nibh id lacus elementum tempus ac nec purus. Aenean et laoreet mauris, scelerisque varius
                    neque. Pellentesque nec tristique massa. Pellentesque tincidunt justo vel metus commodo dapibus.
                    Aenean lacus dui, dapibus sit amet odio et, volutpat elementum neque. Cras aliquam nec felis eu bibendum.
                    Praesent fermentum laoreet erat sit amet dictum. Nam vel urna et elit tempor pharetra. Donec suscipit
                    ac ante eget pellentesque. Pellentesque velit est, fermentum eu viverra non, lacinia vel nulla. Fusce
                    eget ornare odio.</p>
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<!-- End of .privacy-modal -->

<!-- Terms modal starts
================================= -->
<div class="modal fade full-width-modal privacy-terms-modal" id="terms-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body">
                <div class="modal-title">
                    <h2 class="section-title text-center">Terms &amp; Conditions</h2>
                </div>
                <!-- End of .modal-title -->
                <img src="images/terms-modal.jpg" alt="terms modal image" class="img-fluid modal-feat-img">
                <h3>Nullam placerat, diam eu mattis imperdiet, purus urna iaculis ipsum, egestas varius magna orci at risus.
                    Duis finibus sit amet turpis sit amet luctus. </h3>
                <p>Phasellus eget nibh id lacus elementum tempus ac nec purus. Aenean et laoreet mauris, scelerisque varius
                    neque. Pellentesque nec tristique massa. Pellentesque tincidunt justo vel metus commodo dapibus.
                    Aenean lacus dui, dapibus sit amet odio et, volutpat elementum neque. Cras aliquam nec felis eu bibendum.
                    Praesent fermentum laoreet erat sit amet dictum. Nam vel urna et elit tempor pharetra. Donec suscipit
                    ac ante eget pellentesque. Pellentesque velit est, fermentum eu viverra non, lacinia vel nulla. Fusce
                    eget ornare odio.</p>
                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed congue non
                    nisi convallis viverra. Proin in nunc varius lorem mattis dictum. Duis tincidunt dignissim volutpat.
                    Mauris sit amet mollis massa. Duis condimentum massa at orci ornare tempus. Praesent eu est id ante
                    posuere vestibulum a vitae urna.</p>
                <h3>Nullam placerat, diam eu mattis imperdiet, purus urna iaculis ipsum, egestas varius magna orci at risus.
                </h3>
                <p>Phasellus eget nibh id lacus elementum tempus ac nec purus. Aenean et laoreet mauris, scelerisque varius
                    neque. Pellentesque nec tristique massa. Pellentesque tincidunt justo vel metus commodo dapibus.
                    Aenean lacus dui, dapibus sit amet odio et, volutpat elementum neque. Cras aliquam nec felis eu bibendum.
                    Praesent fermentum laoreet erat sit amet dictum. Nam vel urna et elit tempor pharetra. Donec suscipit
                    ac ante eget pellentesque. Pellentesque velit est, fermentum eu viverra non, lacinia vel nulla. Fusce
                    eget ornare odio.</p>

                <h3>Nullam placerat, diam eu mattis imperdiet.</h3>
                <p>Phasellus eget nibh id lacus elementum tempus ac nec purus. Aenean et laoreet mauris, scelerisque varius
                    neque. Pellentesque nec tristique massa. Pellentesque tincidunt justo vel metus commodo dapibus.
                    Aenean lacus dui, dapibus sit amet odio et, volutpat elementum neque. Cras aliquam nec felis eu bibendum.
                    Praesent fermentum laoreet erat sit amet dictum. Nam vel urna et elit tempor pharetra. Donec suscipit
                    ac ante eget pellentesque. Pellentesque velit est, fermentum eu viverra non, lacinia vel nulla. Fusce
                    eget ornare odio.</p>
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<!-- End of .terms-modal -->

<!-- Quote modal starts
================================= -->
<div class="modal fade full-width-modal quote-modal" id="quote-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content theme-bg-d">
            <div class="modal-header">
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times"></i>
                </button>
                <!-- End of .close -->
            </div>
            <!-- End of .modal-header -->

            <div class="modal-body d-flex align-items-center justify-content-center text-center">
                <div class="quote-form-wrapper text-center">
                    <h3>Get a Free Quote</h3>
                    <form action="mailto:salzahrani@netexperts.com.sa" method="post" enctype="text/plain" class="quote-form text-center row">
                        <div class="col-lg-6">
                            <input type="text" name="fname" placeholder="Name">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="email" placeholder="Email">
                        </div>

                        <div class="col-lg-6">
                            <input type="text" name="phone" placeholder="Phone">
                        </div>
                        <div class="col-lg-6">
                            <input type="text" name="website" placeholder="Website">
                        </div>
                        <div class="col-lg-12">
                            <textarea placeholder="Message" name="message"></textarea>
                            <button type="submit" class="custom-btn secondary-btn w-100">GET A QUOTE</button>
                            <div class="social-icons-wrapper d-flex justify-content-center">
                                <p>Follow us:</p>
                                <ul class="social-icons">
                                    <li>
                                        <a href="http://www.facebook.com/" target="_blank" rel="noopener">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://twitter.com/" target="_blank" rel="noopener">
                                            <i class="fab fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://youtube.com/" target="_blank" rel="noopener">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="http://plus.google.com/discover" target="_blank" rel="noopener">
                                            <i class="fab fa-google-plus-g"></i>
                                        </a>
                                    </li>
                                </ul>
                                <!-- End of .social-icons -->
                            </div>
                            <!-- End of .social-icons-wrapper -->
                        </div>
                    </form>
                    <!-- End of .quote-form -->
                </div>
                <!-- End of .quote-form-wrapper -->
            </div>
            <!-- End of .modal-body -->
        </div>
        <!-- End of .modal-content -->
    </div>
    <!-- End of .modal-dialog -->
</div>
<!-- End of .quote-modal -->

<!-- Javascripts
======================================= -->
@include('website.layouts.scripts')

</body>

</html>
