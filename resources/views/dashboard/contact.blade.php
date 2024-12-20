@extends('dashboard.main_dashboard')
@section('page')
<!-- Hero Start -->
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">Contact</h1>
        <ol class="breadcrumb justify-content-center mb-0 animated bounceInDown">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item text-dark" aria-current="page">Contact</li>
        </ol>
    </div>
</div>


<div class="container-fluid contact py-6 wow bounceInUp" data-wow-delay="0.1s">
    <div class="container">
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <div class="p-5 bg-light rounded contact-form">
            <div class="row g-4">
                <div class="col-12">
                    <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">Get in touch</small>
                    <h1 class="display-5 mb-0">Contact Us For Any Queries!</h1>
                </div>
                <div class="col-md-6 col-lg-7">
                    <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    <form action="/contact/send" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Your Name" name="name">
                        <input type="email" class="w-100 form-control p-3 mb-4 border-primary bg-light" placeholder="Enter Your Email" name="email">
                        <textarea class="w-100 form-control mb-4 p-3 border-primary bg-light" rows="4" cols="10" placeholder="Your Message" name="message"></textarea>
                        <button class="w-100 btn btn-primary form-control p-3 border-primary bg-primary rounded-pill" type="submit">Submit Now</button>
                    </form>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div>
                        @foreach ($contacts as $contact)
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                            <i class="fas fa-map-marker-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Address</h4>
                                <p>{{ $contact->address }}</p>
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded mb-4">
                            <i class="fas fa-envelope fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Mail Us</h4>
                                <p class="mb-2">{{ $contact->mail }}</p>                                
                            </div>
                        </div>
                        <div class="d-inline-flex w-100 border border-primary p-4 rounded">
                            <i class="fa fa-phone-alt fa-2x text-primary me-4"></i>
                            <div class="">
                                <h4>Telephone</h4>
                                <p class="mb-2">{{ $contact->telephone1 }}</p>
                                <p class="mb-0">{{ $contact->telephone2 }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection         
