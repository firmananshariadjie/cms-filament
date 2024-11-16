<div class="container-fluid event py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            @foreach($eventContents as $banner)
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">{{ $banner->title }}</small>
            <h1 class="display-5 mb-5">{{ $banner->description }}</h1>
            @endforeach
        </div>
        <div class="tab-class text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 border border-primary bg-light rounded-pill active" data-bs-toggle="pill" href="#tab-1">
                        <span class="text-dark" style="width: 150px;">All Events</span>
                    </a>
                </li>
                @foreach($gallery_categories as $gallery_category)
                <li class="nav-item p-2">
                    <a class="d-flex py-2 mx-2 border border-primary bg-light rounded-pill" data-bs-toggle="pill" href="#{{ $gallery_category->name }}">
                        <span class="text-dark" style="width: 150px;">{{ $gallery_category->name }}</span>
                    </a>
                </li>
                @endforeach()
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                @foreach($galleries as $gallery)
                                <div class="col-md-6 col-lg-3 wow bounceInUp" data-wow-delay="0.1s">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $gallery->image) }}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">{{ $gallery->description }}</h4>
                                            <a href="{{ asset('storage/' . $gallery->image) }}" data-lightbox="event-1" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach()                                
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($gallery_categories as $gallery_category)
                <div id="{{ $gallery_category->name }}" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-12">
                            <div class="row g-4">
                                @foreach($galleries->where('gallery_category_id', $gallery_category->id) as $gallery)
                                <div class="col-md-6 col-lg-3">
                                    <div class="event-img position-relative">
                                        <img class="img-fluid rounded w-100" src="{{ asset('storage/' . $gallery->image) }}" alt="">
                                        <div class="event-overlay d-flex flex-column p-4">
                                            <h4 class="me-auto">{{ $gallery->description }}</h4>
                                            <a href="{{ asset('storage/' . $gallery->image) }}" data-lightbox="event-8" class="my-auto"><i class="fas fa-search-plus text-dark fa-2x"></i></a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach()
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach()
            </div>
        </div>
    </div>
</div>