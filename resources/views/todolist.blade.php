@extends('layouts.app')

@section('title')
    app.toDoList
@endsection

@section('content')

    <section class="content">
        <div class="uk-container">
            <h2>To Do List</h2>
            <div class="to_do_list uk-width-1-1 uk-flex-column uk-flex">
                <div class="row_list uk-flex uk-flex-column">
                    <div class="content_list uk-flex uk-flex-between">
                        <div class="text_list">
                            <h4>Lorem, ipsum.</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, non. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatibus quas sunt voluptatem minus ipsum ad! Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quos, aliquid. Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente magni, itaque explicabo ea praesentium incidunt!</p>
                            <small>2023-01-23 14:34:10</small>
                        </div>
                        <div class="complited">
                            <span class="success" uk-icon="icon: happy; ratio: 3"></span>
                            {{-- <span uk-icon="icon: warning; ratio: 3"></span> --}}
                        </div>
                    </div>
                    <div class="bottom_btns uk-flex">
                        <div class="btn uk-flex add">
                            <div class="icon">
                                <span uk-icon="icon: plus; ratio: 1"></span>
                            </div>
                            <p>Add</p>
                        </div>
                        <div class="btn uk-flex update">
                            <div class="icon">
                                <span uk-icon="icon: refresh; ratio: 1"></span>
                            </div>
                            <p>Update</p>
                        </div>
                        <div class="btn uk-flex delete">
                            <div class="icon">
                                <span uk-icon="icon: minus; ratio: 1"></span>
                            </div>
                            <p>Delete</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection