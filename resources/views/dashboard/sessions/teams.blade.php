<div class="container-fluid bg-light team py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            @foreach($teamContents as $banner)
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">{{ $banner->title }}</small>
            <h1 class="display-5 mb-5">{{ $banner->description }}</h1>
            @endforeach()
        </div>
        <div class="row g-4">
            @foreach($teams as $team)
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-delay="0.1s">
                <div class="team-item rounded">
                    <img class="img-fluid rounded-top img-fixed " src="{{ asset('storage/' . $team->img) }}" alt="">
                    <div class="team-content text-center py-3 bg-dark rounded-bottom">
                        <h4 class="text-primary">{{ $team->name }}</h4>
                        <p class="text-white mb-0">{{ $team->position }}</p>
                    </div>
                </div>
            </div>
            @endforeach()            
        </div>
    </div>
</div>