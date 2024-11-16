@foreach ($bannerContents as $content)                
<div class="container-fluid bg-light py-6 my-6 mt-0">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-7 col-md-12">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-4 animated bounceInDown">{{ $content->title }}</small>
                <h1 class="display-1 mb-4 animated bounceInDown">{!! str($content->content)->sanitizeHtml() !!}</h1>
                <a href="/Contact" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 me-4 animated bounceInLeft">Book Now</a>
                <!-- <a href="" class="btn btn-primary border-0 rounded-pill py-3 px-4 px-md-5 animated bounceInLeft">Know More</a> -->
            </div>
            <div class="col-lg-5 col-md-12">
            <img src="{{ asset('storage/' . $content->img) }}" alt="Image" class="img-fluid rounded animated zoomIn">             
            </div>
        </div>
    </div>
</div>
@endforeach
