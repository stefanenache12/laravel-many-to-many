@extends('layouts.guest')

@section('page-title', 'Login')

@section('main-content')
    <div class="container mt-5">
        <form class="w-25 m-auto border rounded shadow p-3" method="POST" action="{{ route('login') }}">
            @csrf
    
            <!-- Email Address -->
            <div>
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
    
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me">
                    <input id="remember_me" type="checkbox" name="remember" class="form-check-input" >
                    <span>Remember me</span>
                </label>
            </div>

            <div class="w-100 mt-3">
                <button type="submit" class="btn btn-outline-success w-100">
                    LOGIN
                </button>
            </div>
    
            <div class="text-center mt-3 mb-3">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-dark">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>
@endsection
