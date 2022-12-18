@extends('layouts.base')

@section('main')
    <div class="container content_block p-2">
        <div class="row">
            <div class="col">
                <h1 class="montserrat_light">{{ $offer->estate_type }}</h1>
            </div>
            <div class="col">
                <h1 class="montserrat_light text-right">{{ $offer->price }}</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="/img/index_image_col_1.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/img/index_image_col_2.jpg" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/img/index_image_col_3.jpg" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col">

            </div>
        </div>
    </div>
@endsection
