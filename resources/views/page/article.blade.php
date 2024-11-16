@extends('dashboard.main_dashboard')
@section('page')
 
<div class="container-fluid bg-light py-6 mt-0">
    <div class="container text-center animated bounceInDown">
        <h1 class="display-1 mb-4">{{ $article->title }}</h1>        
    </div>
</div>

<div class="container-fluid event">
    <div class="container">        
        <div class="text-center">
            <ul class="nav nav-pills d-inline-flex justify-content-center mb-5 wow bounceInUp" data-wow-delay="0.1s">
                <li class="nav-item p-2">
                    <a class="d-flex mx-2 py-2 active" data-bs-toggle="pill" href="#tab-1">
                        <div class="wow bounceInUp" data-wow-delay="0.1s">
                            <img src="{{ asset('storage/' . $article->img) }}" class="img-fluid rounded" style="width: 50%;" alt="">
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
        {!! str($article->content)->sanitizeHtml()->replace(
            '<img',
            '<img style="max-width:100%;height:auto;border-radius:0.5rem;"'
        ) !!}

        </div>
    </div>    
</div>
<style>
    /* Gambar dalam konten dibatasi lebar maksimum */
    .tes img {
        max-width: 50%; /* Membatasi gambar agar tidak melebihi lebar kontainer */
        height: auto; /* Mempertahankan proporsi gambar */
        border-radius: 0.5rem; /* Tambahkan efek rounded jika diperlukan */
    }
</style>
@endsection         
