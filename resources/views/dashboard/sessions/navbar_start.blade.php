<div class="container-fluid nav-bar">
    <div class="container">
        <nav class="navbar navbar-light navbar-expand-lg py-4">
            <a href="/" class="navbar-brand">
                <h1 class="text-primary fw-bold mb-0">HS Party<span class="text-dark">Planner</span> </h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <a href="/" class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <a href="/about" class="nav-item nav-link {{ Request::is('about') ? 'active' : '' }}">About</a>
                    <a href="/service" class="nav-item nav-link {{ Request::is('service') ? 'active' : '' }}">Services</a>
                    <a href="/event" class="nav-item nav-link {{ Request::is('event') ? 'active' : '' }}">Events</a>
                    <a href="/testimonial" class="nav-item nav-link {{ Request::is('testimonial') ? 'active' : '' }}">Testimonials</a>                    
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                </div>
                <!-- <button class="btn-search btn btn-primary btn-md-square me-4 rounded-circle d-none d-lg-inline-flex" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search"></i></button> -->
                <a href="" class="btn btn-primary py-2 px-4 d-none d-xl-inline-block rounded-pill">Book Now</a>
            </div>
        </nav>
    </div>
</div>