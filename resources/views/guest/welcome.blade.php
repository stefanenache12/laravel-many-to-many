@extends('layouts.guest')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="jumbotron">
        <div class="container text-light text-center p-5">
            <h1 class="pt-5">
                WELCOME THIS IS MY PORTOFOLIO
            </h1>
        </div>
    </div>
    <div class="section welcome">
        <div class="container text-center">
            <h2 class="mt-4 mb-4">Projects</h2>
            <div id="carouselExampleCaptions" class="carousel slide mb-5">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($projects as $project)
                    <div class="carousel-item active">
                        <img src="{{ $project->img_link }}" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{ $project->title }}</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                            <a href="{{ route('guest.show',['id' => $project->id]) }}">
                                <button class="btn col-4 btn-primary mt-3">
                                    VIEW
                                </button>
                            </a>
                        </div>
                      </div>
                    @endforeach
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
        </div>
    </div>
@endsection
