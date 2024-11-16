<div class="container-fluid blog py-6">
    <div class="container">
        <div class="text-center wow bounceInUp" data-wow-delay="0.1s">
            @foreach($articleContents as $banner)
            <small class="d-inline-block fw-bold text-dark text-uppercase bg-light border border-primary rounded-pill px-4 py-1 mb-3">{{ $banner->title }}</small>
            <h1 class="display-5 mb-5">{{ $banner->description }}</h1>
            @endforeach
        </div>
        <div class="row gx-4 justify-content-center">
            @foreach($articles as $article)
            <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s">
                <div class="blog-item">
                    <div class="overflow-hidden rounded">
                        <img src="{{ asset('storage/' . $article->img) }}" class="img-fluid w-100" alt="">
                    </div>
                    <div class="blog-content mx-4 d-flex rounded bg-light">
                        <div class="text-dark bg-primary rounded-start">
                            <div class="h-100 p-3 d-flex flex-column justify-content-center text-center">
                                <p class="fw-bold mb-0">{{ $article->created_at->format('d') }}</p>
                                <p class="fw-bold mb-0">{{ $article->created_at->format('M') }}</p>
                            </div>
                        </div>
                        <a href="article/{{ $article->slug }}" class="h5 lh-base my-auto h-100 p-3">{{ $article->title }}</a>
                    </div>
                </div>
            </div>
            @endforeach()
        </div>
    </div>
</div>