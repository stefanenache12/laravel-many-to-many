@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="container w-75 d-flex p-3">
        <h2>
            Your projects
        </h2>
        <a href="{{ route('admin.projects.create') }}" class="ms-3">
            <button class="btn btn-outline-success">
                ADD NEW PROJECT
            </button>
        </a>
    </div>
    <div class="row w-75 m-auto shadow border">
        <table class="table text-center">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Languages</th>
                <th scope="col">Type</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->languages }}</td>
                        <td>
                            <a href="{{ route('admin.types.index') }}">
                                {{ $project->type->title }}
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('guest.show',['id' => $project->id]) }}">
                                <button class="btn btn-outline-primary">
                                    VIEW
                                </button>
                            </a>
                            <a href="{{ route('admin.projects.edit',['project' => $project->id]) }}">
                                <button class="btn btn-outline-warning">
                                    UPDATE
                                </button>
                            </a>
                            <form
                                action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}"
                                class="d-inline-block"
                                method="POST"
                                onsubmit="return confirm('Are you sure you want to Delete this project?');">
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
    </div>
@endsection