@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="container m-auto">
        <h1 class="mt-3 mb-3 text-center">
            INSERT A NEW PROJECT
        </h1>
        <div class="col-8 m-auto p-5 border rounded shadow ">
            <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                
                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input  type="text" maxlength="250" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add a title" value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label @error('description') is-invalid @enderror">Description <span class="text-danger">*</span></label>
                    @error('description')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <textarea class="form-control" id="description" name="description" rows="2" placeholder="Add a description" required>{{ old('description') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="img_link" class="form-label @error('img_link') is-invalid @enderror">Img Link</label>
                    @error('description')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" maxlength="1024" class="form-control" id="img_link" name="img_link" value="{{ old('img_link') }}" placeholder="Enter an img link">
                </div>

                <div class="mb-3">
                    <label for="type_id" class="form-label">Type</label>
                    <select class="form-select" id="type_id" name="type_id">
                        <option value="">Select a type...</option>
                        @foreach ($types as $type)
                            <option
                                value="{{ $type->id }}"

                                @if (old('type_id') == $type->id)
                                    selected
                                @endif
                                >
                                {{ $type->title }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-2">
                    Technologies
                </div>

                @foreach ($technologies as $technology)
                    <div class="form-check mb-4 d-inline-block me-2">
                        <input class="form-check-input border-2" type="checkbox" name="technologies[]" value="{{ $technology->id }}" id="technology-{{ $technology->id }}">
                        <label class="form-check-label" for="technology-{{ $technology->id }}">
                            {{ $technology->title }}
                        </label>
                    </div>
                @endforeach
                
                <button type="submit" class="m-auto col-12 btn btn-success">
                    ADD PROJECT
                </button>
            </form>
        </div>
    </div>
@endsection