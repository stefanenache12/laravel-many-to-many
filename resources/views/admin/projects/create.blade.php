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
                    <label for="languages" class="form-label @error('languages') is-invalid @enderror">Languages</label>
                    @error('languages')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="text" maxlength="64" class="form-control" id="languages" name="languages" value="{{ old('languages') }}" placeholder="Php,JavaScript..." >
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

                <button type="submit" class="m-auto col-12 btn btn-success">
                    ADD PROJECT
                </button>
            </form>
        </div>
    </div>
@endsection