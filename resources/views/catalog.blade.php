@extends('layouts/mainlayout')
@section('title', 'Catalog')

@section('content')

    <div class="container my-5">
        <section class="text-center">
            <h4 class="mb-5"><strong>Catalog</strong></h4>

            <div class="row">
                @foreach ($listCatalog as $cat)
                    <div class="col-lg-4 col-md-12 mb-4">
                        <div class="card">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="img\{{ $cat['fotoCatalog'] }}" alt="..." height="16">
                                <a href="/contact">
                                    <div class="mask"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-center cardHeadText">{{ $cat['namaCatalog'] }}</h5>
                                <p class="card-text  text-short-container cardParagraphText">{{ $cat['deskripsi'] }}</p>
                                <a href="/catalog" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>

    {{-- <div class="container my-5">
        <section class="text-center">
            <h4 class="mb-5"><strong>Catalog</strong></h4>

            <div class="row">
                <div class="col-lg-4 col-md-12 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/images/Bangkirai.jpg" height="16" />
                            <a href="/contact">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Bangkirai</h5>
                            <p class="card-text">
                                Bangkirai Wood
                            </p>
                            <a href="/catalog" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/images/Kempas.jpg" height="16" />
                            <a href="/contact">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Kempas</h5>
                            <p class="card-text">
                                Kempas Wood
                            </p>
                            <a href="/catalog" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                            <img src="/images/Meranti Merah.jpg" height="16" />
                            <a href="/contact">
                                <div class="mask"></div>
                            </a>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Meranti Merah</h5>
                            <p class="card-text">
                                Meranti Merah Wood
                            </p>
                            <a href="/catalog" class="btn btn-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}

@endsection
