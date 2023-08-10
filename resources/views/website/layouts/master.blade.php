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
    <div>
        <img style="max-width: 250px" src="{{asset('website/images/reloder.gif')}}" alt="" srcset="">
    </div>
{{--    <div class="spinner">--}}

{{--        <div class="dot1"></div>--}}
{{--        <div class="dot2"></div>--}}
{{--    </div>--}}
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



<!-- Javascripts
======================================= -->
@include('website.layouts.scripts')

</body>

</html>
