@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row w-75 m-auto ">
        <h1 class="mt-4 mb-4">
            Technologies used for the projects
        </h1>
        <table class="table text-center mt-2 shadow border rounded">
            <thead class="text-center">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th scope="row">{{ $technology->id }}</th>
                        <td>{{ $technology->title }}</td>
                        <td>
                            <form
                                action="{{ route('admin.technologies.destroy', ['technology' => $technology->id]) }}"
                                class="d-inline-block"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to Delete this technology?');">
                                @csrf
                                @method('DELETE')
                                
                                <button type="submit" class="btn btn-outline-danger">
                                    DELETE
                                </button>
                            </form>
                        </td>
                    </tr>
              @endforeach
            </tbody>
        </table>
        <div class="col-12 m-auto p-2 border rounded shadow ">
            <form action="{{ route('admin.technologies.store') }}" method="POST">
                @csrf
                <h3>
                    ADD A NEW TECHNOLOGY
                </h3>
                <div class="mb-3">
                    <label for="title" class="form-label">Title <span class="text-danger">*</span></label>
                    @error('title')
                        <div class="alert alert-danger my-2">
                            {{ $message }}
                        </div>
                    @enderror
                    <input  type="text" maxlength="250" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Add a title" value="{{ old('title') }}" required>
                </div>
                
                <button type="submit" class="m-auto col-12 btn btn-success">
                    ADD TECHNOLOGY
                </button>
            </form>
        </div>
    </div>
@endsection