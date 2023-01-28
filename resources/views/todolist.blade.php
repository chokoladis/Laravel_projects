@extends('layouts.app')

@section('title')
    app.toDoList
@endsection

@section('content')

    <section class="content">
        <div class="uk-container">
            <h2>To Do List</h2>
            <div class="to_do_list uk-width-1-1 uk-flex-column uk-flex">
                
                @if(!$todolist)
                    <button class="uk-button uk-button-primary" uk-toggle="target: #modal-close-default">Add</button>                    
                @else
                    @foreach($todolist as $task)
                        <div class="row_list uk-flex uk-flex-column" data-id="{{ $task->id }}">
                            <div class="content_list uk-flex uk-flex-between">
                                <div class="text_list">
                                    <h4>{{ $task->title }}</h4>
                                    <p>{{ $task->description }}</p>
                                    <div class="dates uk-flex">
                                        <div class="date_start uk-flex uk-flex-column uk-margin-small-right">
                                            <i>Date start</i>
                                            <small><b>{{ $task->date_start }}</b></small>
                                        </div>
                                        <div class="date_end uk-flex uk-flex-column">
                                            <i>Date end</i>
                                            <small><b>{{ $task->date_end }}</b></small>
                                        </div>
                                    </div>
                                </div>
                                <div class="complited">
                                    <span class="success" uk-icon="icon: happy; ratio: 3"></span>
                                    {{-- <span uk-icon="icon: warning; ratio: 3"></span> --}}
                                </div>
                            </div>
                            <div class="bottom_btns uk-flex">
                                <div class="btn uk-flex add" uk-toggle="target: #modal-close-default">
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
                    @endforeach
                @endif
                
            </div>
        </div>
    </section>

    @include('inc.todolist_add')    

@endsection

