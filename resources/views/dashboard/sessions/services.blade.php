<div class="container-fluid bg-light service py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            @foreach($serviceContents as $banner)
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">{{ $banner->title }}</small>
            <h1 class="display-5 mb-5">{{ $banner->description }}</h1>
            @endforeach
        </div>
        <div class="row g-4">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-6 col-sm-12 wow bounceInUp" data-wow-delay="0.1s">
                <div class="bg-light rounded service-item">
                    <div class="service-content d-flex align-items-center justify-content-center p-4">
                        <div class="service-content-icon text-center">
                            <i class="{{ $service->icon }} fa-7x text-primary mb-4"></i>
                            <h4 class="mb-3">{{ $service->title }}</h4>
                            <p class="mb-4">{{ $service->description }}</p>
                            <a href="/service/{{ $service->slug }}" class="btn btn-primary px-4 py-2 rounded-pill">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach()
        </div>
    </div>
</div>