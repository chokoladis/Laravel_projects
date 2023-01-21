@extends('layouts.app')

@section('title')
    app | registrate user
@endsection

@section('content')
    <section class="content">
        <div class="uk-container">
            <h4 class="uk-margin-auto uk-width-1-2">Registrate me please, dont stop, DEEEEPER!!!</h4>
            <form method="POST" action="{{ route('add-user') }}" class="uk-flex uk-flex-column uk-width-1-2 uk-margin-auto">
                
                @csrf

                <div class="uk-inline">
                    <span class="uk-form-icon" uk-icon="icon: user"></span>
                    <input type="text" name="fio" id="fio" class="uk-input uk-form-blank uk-form-small">
                </div>
                
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                    <input type="email" name="email" id="email" class="uk-input uk-form-blank uk-form-small ">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                    <input type="password" name="password" id="password" class="uk-input uk-form-blank uk-form-small "  aria-label="Not clickable icon">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                    <input type="password" name="password_repeat" id="password_repeat" class="uk-input uk-form-blank uk-form-small " aria-label="Not clickable icon">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: push"></span>
                    <input type="submit" value="send" class="uk-input uk-form-blank uk-form-small ">
                </div>
            </form>
        </div>
    </section>
@endsection