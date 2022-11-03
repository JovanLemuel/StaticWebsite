@extends('layouts/mainlayout')
@section('title', 'Home')

@section('content')

    <div id="about-us" class="mb-5">
        <h1 class="text-center mb-5 pt-5"><strong>About Us</strong></h1>
        <h3 class="text-center mb-3">Wood Company is an established retailer that imports, exports, and sells wood.</h3>
        <h3 class="text-center mb-5"><i>Established 1980.</i></h3>
    </div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000">
                <img src="/images/Bangkirai.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="mb-4">Bangkirai</h5>
                    <a href="/catalog" class="btn btn-primary mb-5">Learn More</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/Kempas.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="mb-4">Kempas</h5>
                    <a href="/catalog" class="btn btn-primary mb-5">Learn More</a>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
                <img src="/images/Meranti Merah.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="mb-4">Meranti Merah</h5>
                    <a href="/catalog" class="btn btn-primary mb-5">Learn More</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


@endsection
