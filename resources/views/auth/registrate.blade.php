@extends('layouts.app')

@section('title')
    app | registrate user
@endsection

@section('content')
    <section class="content">
        <div class="uk-container">
            <h4 class="uk-margin-auto uk-width-1-2 wd-fit">Registrate me please, dont stop, DEEEEPER!!!</h4>
            <form method="POST" action="{{ route('add-user') }}" class="uk-flex uk-flex-column uk-width-1-2 uk-margin-auto">
                
                @csrf

                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                    <input type="text" name="fio" id="fio" 
                        placeholder="Type your FIO/Name"
                        class="uk-input uk-form-small uk-form-blank 
                        @error('fio') uk-form-danger @enderror"
                        value="{{old('fio')}}">
                </div>

                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                    <input type="text" name="username" id="username" 
                        placeholder="Type your login/username"
                        class="uk-input uk-form-small uk-form-blank 
                        @error('username') uk-form-danger @enderror"
                        value="{{old('username')}}">
                </div>

                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
                    <input type="email" name="email" id="email" 
                        placeholder="Type your Email"
                        class="uk-input uk-form-small uk-form-blank 
                        @error('email') uk-form-danger @enderror"
                        value="{{old('email')}}">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                    <input type="password" name="password" id="password" 
                        placeholder="Think up password"
                        class="uk-input uk-form-blank uk-form-small 
                        @error('password') uk-form-danger @enderror" aria-label="Not clickable icon"
                        value="{{old('password')}}">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                    <input type="password" name="password_conf" id="password_conf" 
                        placeholder="Repeate password"
                        class="uk-input uk-form-blank uk-form-small 
                        @error('password_conf') uk-form-danger @enderror" aria-label="Not clickable icon"
                        value="{{old('password_conf')}}">
                </div>
                <div class="uk-inline">
                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: push"></span>
                    <input type="submit" value="send" 
                        class="uk-input uk-form-blank uk-form-small ">
                </div>
            </form>
        </div>
    </section>
@endsection