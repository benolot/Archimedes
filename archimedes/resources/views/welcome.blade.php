@extends('layout')
    @section('content')
            <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Archimedes
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Laravel Documentation</a>
                    <a href="https://github.com/benolot/archimedes">Archimedes Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://github.com/benolot/archimedes">Archimedes Github</a>
                    <a href="https://github.com/laravel/laravel">Laravel GitHub</a>
                </div>
            </div>
        </div>
    @endsection
