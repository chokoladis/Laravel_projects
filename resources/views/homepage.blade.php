@extends('layouts.app')

@section('title')
    app.toDoList
@endsection

@section('content')

    <section class="content">
        <div class="uk-container">
            <div class="bg_volny" uk-parallax="bgy: -30,180">
                <div class="uk-width-1-1" uk-parallax="y: 0,30">
                    <h2 class="width-fit uk-margin-auto" >whatsup, guy</h2>
                    <p>its just test page for my skill in laravel</p>
                </div>
                <h4 uk-parallax="y: -10,20">i wana create site with auth, registrate, toDoList and storage files</h4>
                <p uk-parallax="y: 35,10">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore illum quibusdam porro maxime eum neque, consequuntur corporis accusantium dignissimos aut adipisci itaque est vitae, tempora ipsum quasi. Suscipit doloremque, vitae debitis magnam totam ullam corrupti exercitationem perferendis saepe, repellat porro dolorem necessitatibus? Sunt adipisci, omnis architecto odio culpa, nulla saepe nemo, sed aspernatur quae facere!</p>
                <img src="/img/generate.png" alt="" uk-parallax="x: 1200 0%,0 10%,-50 80%">
                <h1>this is text for example</h1>
            </div>
          
        </div>
    </section>
    
@endsection