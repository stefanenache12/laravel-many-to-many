@extends('layouts.guest')

@section('page-title', 'Welcome')

@section('main-content')
    <div class="container mt-5" style="margin-bottom:80px">
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
                <h5 class="mb-1">
                    Technologies
                </h5>
                @forelse ($project->technologies as $technology)
                                <span class="badge rounded-pill text-bg-primary">
                                    {{ $technology->title }}
                                </span>
                            @empty
                                -
                            @endforelse
                <h6 class="mt-3">
                    Type: {{ $project->type->title }}
                </h6>
            </div>
        </div>
    </div>
@endsection
