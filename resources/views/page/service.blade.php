@extends('dashboard.main_dashboard')
@section('page')
 
<div class="container-fluid bg-light py-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">{{ $service->title }}</h1>        
    </div>
</div>

<div class="container-fluid event">
    <div class="container">        
        <div class="text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 active" data-bs-toggle="pill" href="#tab-1">
                        <div class="wow bounceInUp" data-wow-delay="0.1s">
                            <img src="{{ asset('storage/' . $service->img) }}" class="img-fluid rounded" style="width: 50%;" alt="">
                        </div>
                    </a>
                </li>                                                
            </ul>            
        </div>
    </div>
</div>

<div class="container-fluid event">
    <div class='container'>
        <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s"> 
            <i class="{{ $service->icon }} fa-7x text-primary mb-4"></i>
        </div>
    </div>    
</div>
<div class="container-fluid event">
    <div class='container'>
        <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s"> 
            <p class="mb-4">{!! str($service->content)->sanitizeHtml() !!}</p>
        </div>
    </div>    
</div>

@endsection         
