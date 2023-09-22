@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <section class="dashboard">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body bg-dark border rounded shadow ">
                        <h1 class="text-center text-light">
                            WELCOME ON YOUR DASHBOARD!
                        </h1>
                    </div>
                </div>
            </div>
            <div class="col-6 m-auto mt-3">
                <div class="card  bg-dark text-light">
                    <a href="{{ route('admin.projects.index') }}" class="p-5">
                        <div class="card-body">
                            <h1 class="text-center">
                                VIEW PROJECTS
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-6 m-auto mt-3">
                <div class="card bg-dark text-light">
                    <a href="{{ route('admin.projects.create') }}" class="p-5">
                        <div class="card-body">
                            <h1 class="text-center">
                                ADD A NEW PROJECT
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
