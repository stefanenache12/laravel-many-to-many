@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row w-75 m-auto ">
        <h1 class="mt-4 mb-4">
            Types of the projects
        </h1>
        <table class="table text-center mt-2 shadow border rounded">
            <thead class="text-center">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Projects</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($types as $type)
                    <tr>
                        <th scope="row">{{ $type->id }}</th>
                        <td>{{ $type->title }}</td>
                        <td>
                            <ul>
                                @foreach ($type->project as $project)
                                    <li>
                                        <a href="{{ route('guest.show', ['id' => $project->id]) }}">
                                            {{ $project->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection