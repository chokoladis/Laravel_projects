@extends('layouts.app')

@section('title')
    Personal section
@endsection

@section('content')
    <section class="content">
        <div class="uk-container">
            <div class="profile_top">
                <div class="fio">
                    @auth
                        {{auth()->user()->name}}
                        <div class="text-end">
                        <a href="{{ route('page-logout') }}" class="btn btn-outline-light me-2">Logout</a>
                        </div>
                    @endauth

                    @guest
                        <div class="text-end">
                        <a href="{{ route('page-login') }}" class="btn btn-outline-light me-2">Login</a>
                        <a href="{{ route('page-reg') }}" class="btn btn-warning">Sign-up</a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>
@endsection