@extends('website.layouts.master')

@section('title')
    NetExperts
@endsection

@section('css')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

@endsection

@section('content')


    <!-- Banner starts
======================================== -->
    <section id="home" class=" banner d-flex align-items-center">
        <div class="container">
            <div class="row no-gutters align-items-center">
                <div class="col-lg-5 text-center text-lg-left animate right-animate">
                    <h1 class="animate"> NetExperts <span class="showRight-animate" style="--i:1"></span></h1>
                    <!-- <p class="subtitle animate">Unlocking Your IT Potential  <span class="showRight-animate" style="--i:2"></span></p> -->
                    <p class="larger-txt animate">one stop destination for all your IT solutions  <span class="showRight-animate" style="--i:3"></span></p>
                </div>
                <!-- End of .col-lg-5 -->

                <div class="col-lg-7 left-animate">
                    <div class="img-container text-center text-lg-right animate">
                        <img src="{{asset('website/images/banner/banner-hero.png')}}" alt="Onepage home banner image" class="img-fluid">

                    </div>
                    <!-- End of .img-container -->
                </div>
                <!-- End of .col-lg-7 -->
            </div>
            <!-- End of .row -->
        </div>
        <!-- End of .container -->

    </section>
    <!-- End of .banner -->
    <section id="about-scrol" style="margin-bottom: 80px;"></section>

    <!-- Features starts
    ======================================= -->
    <section id="about" class="features light-grey-bg pt-4  mt-4" >
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">

                    <div class="col-lg-5 offset-lg-1">
                        <div class="features-content text-center text-lg-left right-animate">
                            <h2 class="section-title animate">About Us</h2>
                            <p class="animate"  align="justify">  <span style="font-weight: bold;">NetExperts</span> Information Technology is a Saudi company
                                was founded in 2013. We provide technical support for
                                companies, institutions and business owners in all their
                                IT services. we develop and manage IT solutions to let
                                you focus on your business. Focusing on the quality of
                                services and advice to our customers for the
                                sustainability of solutions, which indeed adapts to Saudi
                                Arabia Vision 2030 for successful business growth.

                            </p>
                        </div>
                        <!-- End of .features-content -->
                    </div>

                    <div class="col-lg-6 text-center text-lg-left">
                        <div class="img-container left-animate">
                            <img src="{{asset('website/images/features/features-img-1.png')}}" alt="why choose us" class="img-fluid animate">

                        </div>
                        <!-- End of .img-container -->
                    </div>

                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>

            <!-- End of .features-grid -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .features -->




    <!-- Vision  -->
    <section id="vission" class="features section-gap vision">
        <div class="container">

            <div class="vision-title text-center text-white title-animate animate">
                Vision
            </div>
            <div class="vision-content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-5 offset-lg-1">
                        <div class="text-center text-lg-left w-100 right-animate"  >
                            <p align="justify" class="text-white animate">To be a leading provider of IT solutions in Saudi Arabia.
                                Our vision is to create exceptional, quality IT solutions
                                that inspire, engage, and delight our customers. We are
                                dedicated to enhancing their IT solutions to let them
                                focus on their business.</p>
                        </div>
                        <!-- End of .features-content -->
                    </div>

                    <div class="col-lg-5 offset-lg-1 text-center">
                        <div class="img-container left-animate">
                            <img src="{{asset('website/images/visions/pic.png')}}" alt="core values" class="img-fluid animate">
                        </div>
                        <!-- End of .img-container -->
                    </div>


                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1689828631">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
            </svg>
        </div>
    </section>
    <!-- end Vision -->

    <!-- Mission Section -->
    <section id="mission" class="mission section-gap light-grey-bg">
        <div class="container">

            <div class="section-header mb-3  title-animate animate">
                <h2 class="section-title text-center ">
                    Mission
                </h2>
                <p class="features-content text-center ">To earn client loyalty while upholding our principles and
                    corporate ethics through:
                </p>
            </div>

            <div class="section-content">

                <div class="row align-items-center justify-content-center right-animate mb-4">
                    <div class="col-md-4 animate"  style="--i:1">
                        <div class="mission-block text-center ">
                            <img src="{{asset('website/images/missions/OBJECTS.png')}}" class="w-50" alt="design">
                        </div>
                        <div class="text-center m-auto" style="width: 60%;">
                            <h5 class="mt-5 ">Reliable and High-Quality Products</h5>
                        </div>

                    </div>

                    <div class="col-md-4 animate" style="--i:2">
                        <div class="mission-block text-center ">
                            <img src="{{asset('website/images/missions/35294599_8292847 1.png')}}" class="w-50" alt="design">
                        </div>
                        <div class="text-center m-auto" style="width: 60%;">
                            <h5 class="mt-5 ">Highly Skilled Team</h5>

                        </div>
                    </div>


                    <div class="col-md-4 animate" style="--i:3">
                        <div class="mission-block text-center ">
                            <img src="{{asset('website/images/missions/amico.png')}}" class="w-50" alt="design">
                        </div>
                        <div class="text-center m-auto" style="width: 60%;">
                            <h5 class="mt-5 ">Enhanced operational procedures</h5>

                        </div>



                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- end Section -->


    <!-- features - corevalue  -->
    <section class="features light-grey-bg" id="core-value">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">

                    <div class="col-lg-6 text-center right-animate">
                        <div class="img-container animate">
                            <img src="{{asset('website/images/core-value.jpg')}}" alt="core values" class="img-fluid">
                        </div>
                        <!-- End of .img-container -->
                    </div>
                    <div class="col-lg-6 left-animate">
                        <div class="features-content text-center text-lg-left animate">
                            <h2 class="section-title animate">Core Values</h2>
                            <p align="justify" class="animate">As we work to provide our clients with great IT solutions,
                                our values direct our interactions, decisions, and actions.
                                These core values reflect our commitment to excellence,
                                customer satisfaction, reliability, and integrity.</p>

                        </div>
                        <!-- End of .features-content -->
                    </div>



                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- end section -->



    <!-- feature Excellence -->
    <section class="features light-grey-bg" id="excellence">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">
                    <div class="col-lg-5 offset-lg-1 right-animate">
                        <div class="features-content text-center text-lg-left w-100 animate">
                            <h2 class="section-title animate">Excellence</h2>
                            <p align="justify" class="animate">We are dedicated to delivering excellence in every
                                aspect of our work. From the quality of our products to
                                the skill and expertise of our team, we strive for nothing
                                less than the highest standards. We continuously
                                enhance our knowledge, techniques, and technologies
                                to guarantee that our clients obtain the best results
                                exceed their expectations.</p>
                        </div>
                        <!-- End of .features-content -->
                    </div>

                    <div class="col-lg-6 text-center left-animate">
                        <div class="img-container animate">
                            <img src="{{asset('website/images/ex.png')}}" alt="Excellence" class="img-fluid animate">
                        </div>
                        <!-- End of .img-container -->
                    </div>


                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- end sec -->

    <!-- features - corevalue  -->
    <section class="features light-grey-bg" id="customer-satisfaction">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">

                    <div class="col-lg-6 text-center right-animate">
                        <div class="img-container animate">
                            <img src="{{asset('website/images/stasfaction.jpeg')}}" alt="core values" class="img-fluid animate">
                        </div>
                        <!-- End of .img-container -->
                    </div>
                    <div class="col-lg-6">
                        <div class="features-content text-center text-lg-left left-animate">
                            <h2 class="section-title animate">Customer Satisfaction</h2>
                            <p align="justify" class="animate">Everything we do is focused on serving our clients. We
                                believe in building long-term relationships based on
                                trust, reliability, and exceptional service. We pay special
                                attention to our clients' demands and collaborate closely
                                to comprehend their goals. By providing personalized
                                solutions and exceeding expectations, we aim to create
                                satisfied customers who become our advocates.</p>
                        </div>
                        <!-- End of .features-content -->
                    </div>



                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- end section -->



    <!-- integrity - reliability -->
    <section id="integrity  " class="features light-grey-bg">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">

                    <div class="col-lg-6 offset-lg-1 right-animate">
                        <div class="features-content text-center text-lg-left">
                            <div class="section-title animate">Integrity</div>
                            <p align="justify" class="animate">We adhere to the highest ethical standards in all our
                                business dealings. Our connections with customers,
                                suppliers, and staff are built on honesty, transparency,
                                and trust. We believe in open communication, fairness,
                                and delivering on our promises.</p>

                        </div>
                        <!-- End of .features-content -->
                    </div>
                    <div class="col-lg-5 text-center left-animate">
                        <div class="img-container" class="animate">
                            <img src="{{asset('website/images/colabic.png')}}" class="img-fluid animate" alt="">
                        </div>
                        <!-- End of .img-container -->
                    </div>




                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
        </div>
    </section>


    <!-- integrity - reliability -->
    <section id="reliability" class="features light-grey-bg">
        <div class="container">
            <div class="features-grid">
                <div class="row align-items-center">

                    <div class="col-lg-6 text-center right-animate">
                        <div class="img-container animate">
                            <img src="{{asset('website/images/Partnership-pana 1.png')}}" class="img-fluid animate" alt="">
                        </div>
                        <!-- End of .img-container -->
                    </div>

                    <div class="col-lg-5 offset-lg-1">

                        <div class="features-content text-center text-lg-left left-animate">
                            <div class="section-title animate">Reliability</div>
                            <p align="justify" class="animate">We aim to be the most reliable provider to our
                                customers by providing our services to them in the right
                                way with high quality and timely manner. This pushes us
                                to do our best effort and beyond to meet and exceed
                                their expectations.</p>
                        </div>
                        <!-- End of .features-content -->
                    </div>





                    <!-- End of .col-lg-6 -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .features-grid -->
        </div>
    </section>


    <!-- our clients -->
    <section id="vendors"  class="slider-logos">
        <div class="slide-block d-flex justify-content-between">
            <div class="slide">

                <a href="#">
                    <img src="{{asset('website/images/clients/client-1.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-2.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-3.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-4.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-5.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-6.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-7.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-8.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-9.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-10.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-11.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-12.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-14.png')}}" alt="product" class="img-fluid">

                </a>

            </div>
            <div class="slide">
                <a href="#">
                    <img src="{{asset('website/images/clients/client-15.png')}}" alt="product" class="img-fluid">

                </a>

            </div>



        </div>
    </section>



    <!-- End of .clients -->






    <!-- Our Products
    ======================================= -->
    <section  class="our-products "></section>
    <!-- End of .Products -->


    <!-- Services starts
    ======================================= -->

    <!-- Services starts -->
    <section id="our-services"  class="onepage-services section-gap light-grey-bg pt-4">
        <div class="container" >
            <div class="title-animate">
                <h2 class="section-title text-center animate">Our Services</h2>
                <p align="justify" class="larger-txt animate">NetExperts one-stop destination for all your IT solutions
                    no matter which field you are in. Since 2013, we proudly
                    offer a comprehensive range of IT solutions to the Public
                    & Private sectors. Our team is dedicated to providing
                    exceptional service and expertise in the supply,
                    installation and operation ensuring that exceeds your
                    expectations.</p>

            </div>



            <div class="process-tab-container grid-wrapper">
                <div class="row">
                    <div class="col-lg-12 left-animate">
                        <div class="nav nav-pills animate">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <a class="nav-link active" data-bs-toggle="pill" onclick="activateTab('process-tab-1')">
                                        <span>01</span>
                                        Software Development
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <a class="nav-link " data-bs-toggle="pill" onclick="activateTab('process-tab-2')">
                                        <span>02</span>
                                        Data Center
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <a class="nav-link " data-bs-toggle="pill" onclick="activateTab('process-tab-3')">
                                        <span>03</span>
                                        Collaboration
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                                    <a class="nav-link " data-bs-toggle="pill" onclick="activateTab('process-tab-4')">
                                        <span>04</span>
                                        Infrastructure Security
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">

                                    <a class="nav-link " data-bs-toggle="pill" onclick="activateTab('process-tab-5')">
                                        <span>05</span>
                                        Cloud
                                        <i class="fa fa-long-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of .col -->

                    <div class="col-lg-12 right-animate" id="our-services">
                        <div class="tab-content animate">

                            <div class="tab-pane fade show active" id="process-tab-1">
                                <div class="img-card process-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('website/images/services/software-development.png')}}" alt="..." class="img-fluid">

                                        </div>

                                        <div class="col-md-6">
                                            <div class="process-card-content">
                                                <h3>Applications/Software Development</h3>
                                                <ul class="list text-left">
                                                    <li class="list-item">Web development</li>
                                                    <li class="list-item">Desktop application development</li>
                                                    <li class="list-item">User Interface/ User Experience (UI/UX)</li>
                                                    <li class="list-item">Database development</li>
                                                    <li class="list-item">Integration & Integrated Development</li>
                                                    <li class="list-item">Application Server</li>
                                                    <li class="list-item">API Management</li>
                                                    <li class="list-item">Software Testing</li>
                                                </ul>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade " id="process-tab-2">
                                <div class="img-card process-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('website/images/services/data-center.png')}}" alt="..." class="img-fluid">
                                        </div>
                                        <div class="col-md-6">

                                            <div class="process-card-content">
                                                <h3>Data Center infrastructure</h3>
                                                <ul class="list text-left">
                                                    <li class="list-item">Compute</li>
                                                    <li class="list-item">Virtualization</li>
                                                    <li class="list-item">Storage</li>
                                                    <li class="list-item">Hyperconvearged</li>
                                                    <li class="list-item">System Infrastructure</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- undefined -->
                            </div>

                            <div class="tab-pane fade " id="process-tab-3">
                                <div class="img-card process-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('website/images/services/collaboration.png')}}" alt="..." class="img-fluid">

                                        </div>
                                        <div class="col-md-6">
                                            <div class="process-card-content">
                                                <h3>Collaboration</h3>
                                                <ul class="list text-left">
                                                    <li class="list-item">IP telephone services </li>
                                                    <li class="list-item">Contact Center Solutions</li>
                                                    <li class="list-item">Unified communication services</li>
                                                    <li class="list-item">API & Cloud integration</li>
                                                </ul>


                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- undefined -->
                            </div>



                            <div class="tab-pane fade " id="process-tab-4">
                                <div class="img-card process-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('website/images/services/infrastructure-security.png')}}" alt="..." class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="process-card-content">
                                                <h3>Infrastructure Security</h3>
                                                <ul class="list text-left">
                                                    <li class="list-item">Email Security </li>
                                                    <li class="list-item">Endpoint Security</li>
                                                    <li class="list-item">Network Security</li>
                                                    <li class="list-item">SEIM Solutions</li>
                                                    <li class="list-item">Intrusion prevention system (IPS)</li>
                                                    <li class="list-item">PAM Solutions</li>
                                                    <li class="list-item">MFA Solutions</li>
                                                    <li class="list-item">NAC Solutions</li>
                                                    <li class="list-item">Web application firewall</li>
                                                    <li class="list-item">Risk Assessment and Management Consultation</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- undefined -->
                            </div>


                            <div class="tab-pane fade " id="process-tab-5">
                                <div class="img-card process-card">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <img src="{{asset('website/images/services/cloud.png')}}" alt="..." class="img-fluid">
                                        </div>
                                        <div class="col-md-6">
                                            <div class="process-card-content">
                                                <h3>Cloud</h3>
                                                <ul class="list text-left">
                                                    <li class="list-item">Microsoft Azure</li>
                                                    <li class="list-item">Oracle Cloud</li>
                                                    <li class="list-item">Alibaba Cloud</li>
                                                    <li class="list-item">Google Cloud</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- undefined -->
                            </div>

                        </div>
                    </div>
                    <!-- End of .col -->
                </div>
                <!-- End of .row -->
            </div>
            <!-- End of .process-tab-container -->
        </div>
        <!-- End of .container -->
    </section>
    <!-- End of .process -->

    <!-- End of .onepage-services -->


    <!-- Contact Us
    ======================================= -->
    <section id="contact-us" class="contact-us overflow-hidden">
        <div class="contact-us-title text-center title-animate">
            <h2 class="animate"> Contact Us</h2>
        </div>

        <div class="contact-info">

            <div class="row justify-content-center right-animate">
                <div class="col-md-5  contact-info-block animate">
                    <a href="https://wa.me/+966560701060" class="text-decoration-none">
                        <i class="fa fa-phone fa-rotate-90"></i>
                        <h3>Mobile</h3>
                        <p>+966 5 60 70 10 60</p>
                    </a>
                </div>


                <div class="col-md-5 contact-info-block animate">
                    <i class="fa fa-location-arrow"></i>
                    <h3>Location</h3>
                    <p>Riyadh, AlQairawan Dist</p>
                </div>
            </div>
        </div>

        <div class="row left-animate">

            <div class="col-md-7 contact-us-content animate">



                <div class="content">


                    <form action="{{route('contactus.send')}}" method="post">
                        @csrf
                        <div class="input-icons">
                            <i class="fa fa-phone fa-rotate-90 icon"></i>
                            <input value="{{old('phone_number')}}"  type="text" name="phone_number" class="form-control form-input" placeholder="Phone No." required>
                        </div>

                        <div class="input-icons">
                            <i class="fa fa-light fa-envelope icon"></i>
                            <input value="{{old('email')}}" type="email" name="email"  class="form-control form-input" id="email-contact" placeholder="E-mail" required>
                        </div>

                        <div class="input-icons">
                            <i class="fa fa-comment icon"></i>
                            <textarea name="message" class="form-control form-input" id="message-contact" placeholder="Your message.." required  rows="4">{{old('message')}}</textarea>

                        </div>

                       <input type="submit" value="Send" class='custom-btn contactBtn'>
{{--                        <a href="mailto:salzahrani@netexperts.com.sa" target="_blank" class="custom-btn contactBtn">Send</a>--}}

                    </form>

                </div>

            </div>

            <div class="col-md-5 contact-bg animate">
                <img src="{{asset('website/images/contact-us.png')}}" class="img-fluid" alt="">
            </div>

        </div>
    </section>



    <!-- ./end contact us -->
@endsection


@section('js')
    <script>
        @if(session()->has('success'))

            toastr.options =
                {
                    "closeButton" : true,
                    "progressBar" : true,
                    'duration':'5s'
                }
            toastr.success("{{ session('success') }}");

        @endif


    </script>
@endsection
