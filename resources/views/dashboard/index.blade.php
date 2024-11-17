<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CaterServ - Catering Services Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playball&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/lib/owlcarousel/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar start -->
    @include('dashboard.sessions.navbar_start')
    <!-- Navbar End -->


    <!-- Modal Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center">
                    <div class="input-group w-75 mx-auto d-flex">
                        <input type="search" class="form-control bg-transparent p-3" placeholder="keywords" aria-describedby="search-icon-1">
                        <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Search End -->


    <!-- Hero Start -->

    @include('dashboard.sessions.hero_start')
    <!-- Hero End -->


    <!-- About Satrt -->
    @include('dashboard.sessions.about')
    <!-- About End -->

    <!-- Service Start -->
    @include('dashboard.sessions.services')
    <!-- Service End -->


    <!-- Events Start -->
    @include('dashboard.sessions.events')
    <!-- Events End -->

    <!-- Team Start -->
    @include('dashboard.sessions.teams')
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('dashboard.sessions.testimonials')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    @include('dashboard.sessions.articles')
    <!-- Blog End -->


    <!-- Footer Start -->
    <div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h1 class="text-primary">Cater<span class="text-dark">Serv</span></h1>
                        <p class="lh-lg mb-4">There cursus massa at urnaaculis estieSed aliquamellus vitae ultrs condmentum leo massamollis its estiegittis miristum.</p>
                        <div class="footer-icon d-flex">
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Special Facilities</h4>
                        <div class="d-flex flex-column align-items-start">
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Cheese Burger</a>
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Sandwich</a>
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Panner Burger</a>
                            <a class="text-body mb-3" href=""><i class="fa fa-check text-primary me-2"></i>Special Sweets</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Contact Us</h4>
                        <div class="d-flex flex-column align-items-start">
                            <p><i class="fa fa-map-marker-alt text-primary me-2"></i> 123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt text-primary me-2"></i> (+012) 3456 7890 123</p>
                            <p><i class="fas fa-envelope text-primary me-2"></i> info@example.com</p>
                            <p><i class="fa fa-clock text-primary me-2"></i> 26/7 Hours Service</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Social Gallery</h4>
                        <div class="row g-2">
                            <div class="col-4">
                                <img src="img/menu-01.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/menu-02.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/menu-03.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/menu-04.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/menu-05.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                            <div class="col-4">
                                <img src="img/menu-06.jpg" class="img-fluid rounded-circle border border-primary p-2" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site Name</a>, All right reserved.</span>
                </div>
                <div class="col-md-6 my-auto text-center text-md-end text-white">
                    <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                    <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                    <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                    Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a class="border-bottom" href="https://themewagon.com">ThemeWagon</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <div class="icon-container d-flex justify-content-center align-items-center">
        <a href="#" class="btn-md-square btn-primary rounded-circle back-to-top" style="display: flex;left: 293.200;top: 592.000;bottom: 80px;">
            <img src="{{ asset('assets/img/wa.png') }}" alt="" style="
            width: 44px;
        ">
        </a>
        <a href="#" class="btn btn-md-square btn-primary rounded-circle back-to-top ms-2">
            <i class="fa fa-arrow-up"></i>
        </a>
    </div>



    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('assets/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('assets/lib/lightbox/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
</body>

</html>
