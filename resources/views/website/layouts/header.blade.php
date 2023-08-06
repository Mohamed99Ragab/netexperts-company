<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg align-items-center container-fluid ">
            <a class="navbar-brand" href="#home">

                <img src="{{asset('website/images/final-logof.png')}}" alt="NetExperts logo">


            </a>
            <!-- End of .navbar-brand -->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#custom-navbar" aria-controls="custom-navbar"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="custom-toggler-icon"></span>
                <span class="custom-toggler-icon"></span>
                <span class="custom-toggler-icon"></span>
            </button>
            <!-- End of .navbar-toggler -->

            <div class="collapse navbar-collapse" id="custom-navbar">
                <ul class="navbar-nav ml-auto align-items-center">



                    <li class="dropdown nav-item">
                        <span id="drop-about"  onclick="toggleDropDownAbout()" class="dropbtn nav-link page-scroll">About<i id="dropmenu-icon" class="fa fa-chevron-down ps-2"></i>  </span>
                        <ul id="myDropdown" class="dropdown-content">


                            <li><a onclick="scrollToTopOfSection('about');"  class="nav-link">About NetExperts</a></li>
                            <li><a  onclick="scrollToTopOfSection('vission');"  class="nav-link">Vision</a></li>
                            <li><a  onclick="scrollToTopOfSection('mission');" class="nav-link" >Mission</a></li>
                            <li><a  onclick="scrollToTopOfSection('core-value');" class="nav-link">Core Values</a></li>



                        </ul>
                    </li>





                    <li class="nav-item">
                        <a onclick="scrollToTopOfSection('our-services')"  class="nav-link ">Our Services</a>
                    </li>





                    <li class="nav-item">
                        <a onclick="scrollToTopOfSection('vendors');" class="nav-link page-scroll">Vendors</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="scrollToTopOfSection('contact-us')" class="nav-link page-scroll">Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#" class="custom-btn btn-small" data-bs-toggle="modal" data-bs-target="#quote-modal">Free Quote</a>
                    </li>
                </ul>
            </div>
            <!-- End of .navbar-nav -->
        </nav>
    </div>
    <!-- End of .container -->
</header>
