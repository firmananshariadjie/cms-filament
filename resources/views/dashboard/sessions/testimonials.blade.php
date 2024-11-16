<div class="container-fluid py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            @foreach($testimonialContents as $banner)
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">{{ $banner -> title }}</small>
            <h1 class="display-5 mb-5">{{ $banner -> description }}</h1>
            @endforeach()
        </div>
        <div class="owl-carousel owl-theme testimonial-carousel testimonial-carousel-1 mb-4 wow bounceInUp" data-wow-delay="0.1s">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-item rounded bg-light">
                <div class="d-flex mb-3">
                    @if ($testimonial->image)
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid rounded-circle flex-shrink-0" alt="">
                    @else
                        <i class="fas fa-user img-fluid rounded-circle flex-shrink-0" style="font-size: 50px;"></i>
                    @endif

                    <div class="position-absolute" style="top: 15px; right: 20px;">
                        <i class="fa fa-quote-right fa-2x"></i>
                    </div>
                    <div class="ps-3 my-auto">
                        <h4 class="mb-0">{{ $testimonial->name}}</h4>
                        <!-- <p class="m-0">Profession</p> -->
                    </div>
                </div>
                <div class="testimonial-content">
                    <div class="d-flex">
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                        <i class="fas fa-star text-primary"></i>
                    </div>
                    <p class="fs-5 m-0 pt-3">{!! str($testimonial->content)->sanitizeHtml() !!}</p>
                </div>
            </div>
            @endforeach()            
        </div>        
    </div>
</div>