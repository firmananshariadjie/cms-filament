@foreach ($aboutContents as $content) 
<div class="container-fluid py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-5 wow bounceInUp" data-wow-delay="0.1s">
                <img src="{{ asset('storage/' . $content->img) }}" class="img-fluid rounded" alt="">
            </div>
            <div class="col-lg-7 wow bounceInUp" data-wow-delay="0.3s">
                <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">{{ $content->title }}</small>
                <h1 class="display-5 mb-4">{{ $content->description }}</h1>
                <p class="mb-4">{!! str($content->content)->sanitizeHtml() !!}</p>
                <a href="/about" class="btn btn-primary py-3 px-5 rounded-pill">About Us<i class="fas fa-arrow-right ps-2"></i></a>
            </div>
        </div>
    </div>
</div>
@endforeach()