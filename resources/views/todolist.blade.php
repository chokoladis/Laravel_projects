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
                    <button class="uk-button uk-button-primary add" uk-toggle="target: #modal_todolist">Add</button>                    
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
                                    @foreach($users as $user)
                                        @if ($user->id == $task->user_id)
                                            <p>{{ $user->username }}</p>  
                                            @break      
                                        @endif    
                                    @endforeach
                                </div>
                                <div class="complited">
                                    @if($task->complited)
                                        <span class="success" uk-icon="icon: happy; ratio: 3"></span>
                                    @else
                                        <span class="warning" uk-icon="icon: warning; ratio: 3"></span>
                                    @endif
                                </div>
                            </div>
                            <div class="bottom_btns uk-flex">
                                <div class="btn uk-flex add" uk-toggle="target: #modal_todolist">
                                    <div class="icon">
                                        <span uk-icon="icon: plus; ratio: 1"></span>
                                    </div>
                                    <p>Add</p>
                                </div>
                                <div class="btn uk-flex update" uk-toggle="target: #modal_todolist">
                                    <div class="icon">
                                        <span uk-icon="icon: refresh; ratio: 1"></span>
                                    </div>
                                    <p>Update</p>
                                </div>
                                <a href="{{ route('todolist.destroy', $task->id) }}" class="btn uk-flex delete">
                                    <div class="icon">
                                        <span uk-icon="icon: minus; ratio: 1"></span>
                                    </div>
                                    <p>Delete</p>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif
                
            </div>
            <div class="nav_pages">
                <ul>
                    {{-- Постраничный вывод --}}
                    @php ($i = 1)
                    
                    @while ($i <= $qtyPages)
                        <li class="
                            @php ($page = Request::query('page'))
                            @if($page == $i || ($page == false && $i == 1 )) page-curr @endif">
                            <a href="{{ route('todolist.index') }}?page={{$i}}">{{$i}}</a></li>
                        @php ($i++)
                    @endwhile
                   
                </ul>
            </div>
        </div>
    </section>

    @include('modals.modal_container')

@endsection

