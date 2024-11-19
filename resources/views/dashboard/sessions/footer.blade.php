<style>
    .custom-img{
        height:100px; 
        width:100px;
        border-radius:50%; 
        object-fit:cover;
    }
</style>
<div class="container-fluid footer py-6 my-6 mb-0 bg-light wow bounceInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="footer-item">
                        @foreach ($aboutContents as $content) 
                        <h1 class="text-primary">Cater<span class="text-dark">Serv</span></h1>
                        <p class="lh-lg mb-4">{!! str($content->content)->sanitizeHtml()->limit(300) !!}</p>
                        <div class="footer-icon d-flex">
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-sm-square me-2 rounded-circle" href=""><i class="fab fa-twitter"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square me-2 rounded-circle"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="btn btn-primary btn-sm-square rounded-circle"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        @endforeach
                    </div>
                </div>                
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">
                        <h4 class="mb-4">Contact Us</h4>
                        <div class="d-flex flex-column align-items-start">
                            @foreach ($contacts as $data)
                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i> {{ $data->address }}</p>
                                <p><i class="fa fa-phone-alt text-primary me-2"></i> {{ $data->telephone1 }}</p>
                                <p><i class="fas fa-envelope text-primary me-2"></i> {{ $data->mail }}</p>                            
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-item">   
                        <h4 class="mb-4">Social Gallery</h4>
                        <div class="row g-2">
                            @foreach ($gallery_footer as $content) 
                            <div class="col-4">
                                <img src="{{ asset('storage/' . $content->image) }}" class=" border border-primary p-2 custom-img">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>