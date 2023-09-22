@extends('layouts.guest')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="container mt-5">
        <h1 class="text-center mb-5">
            {{ $project->title }}  
        </h1>
        <div class="row mt-3">
            <div class="col-6">
                <img class="w-75" src="{{ $project->img_link }}
                " alt="">
            </div>
            <div class="col-6 p-5 text-center m-auto">
                <h5 class="mb-4">
                     {{ $project->description }}
                </h5>
                <h5 class="mb-4">
                    Languages: {{ $project->languages }}
                </h5>
                <h6>
                    Type: {{ $project->type->title }}
                </h6>
            </div>
        </div>
    </div>
@endsection
