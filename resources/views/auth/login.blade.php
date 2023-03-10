@extends('layouts.app')

@section('title')
    app | registrate user
@endsection

@section('content')
    <section class="content">
        <div class="uk-container">
            <h4 class="uk-margin-auto uk-width-1-2 wd-fit">Registrate me please, dont stop, DIPPER!!!</h4>
            <form method="POST" action="{{ route('login-submit') }}" class="uk-flex uk-flex-column uk-width-1-2 uk-margin-auto">
                
                @csrf
                
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                    <input type="text" name="username" id="username" class="uk-input uk-form-small uk-form-blank @error('email') uk-form-danger @enderror">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                    <input type="password" name="password" id="password" class="uk-input uk-form-blank uk-form-small @error('password') uk-form-danger @enderror"  aria-label="Not clickable icon">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: push"></span>
                    <input type="submit" value="send" class="uk-input uk-form-blank uk-form-small ">
                </div>
            </form>
        </div>
    </section>
@endsection