@extends('layouts.guest')

@section('page-title', 'Register')

@section('main-content')
    <div class="container mt-5">
        <form class="w-25 m-auto border rounded shadow p-3" method="POST" action="{{ route('register') }}">
            @csrf
    
            <!-- Name -->
            <div>
                <label for="name" class="form-label">
                    Name
                </label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
    
            <!-- Email Address -->
            <div class="mt-4">
                <label for="email" class="form-label">
                    Email
                </label>
                <input type="email" id="email" name="email" class="form-control">
            </div>
    
            <!-- Password -->
            <div class="mt-4">
                <label for="password" class="form-label">
                    Password
                </label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
    
            <!-- Confirm Password -->
            <div class="mt-4">
                <label for="password_confirmation" class="form-label">
                    Confirm Password
                </label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
            </div>

            <div class="w-100 mt-4">
                <button type="submit" class="btn btn-outline-primary w-100">
                    Register
                </button>
            </div>
    
            <div class="text-center mt-3 mb-3">
                <a href="{{ route('login') }}" class="text-dark">
                    {{ __('Already registered?') }}
                </a>
            </div>
        </form>
    </div>
@endsection