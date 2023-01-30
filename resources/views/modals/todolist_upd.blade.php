<h2 class="uk-modal-title">Update task {{ $task->id }}</h2>
<form action="{{ route('page-todolist-upd', $task->id)  }}" method="post" class="form_todolist_upd uk-flex uk-flex-column">
        
    @csrf

    <div class="forms-control uk-flex uk-margin-small-bottom">
        <div class="uk-inline uk-width-1-4">
            <span class="uk-form-icon" uk-icon="icon: pencil"></span>
            <input type="text" name="title" id="title"
                placeholder="Input title task" required class="uk-input @error('title') uk-form-danger @enderror" value="{{ $task->title }}">
        </div>
        <div class="uk-inline uk-width-2-4">
            <span class="uk-form-icon" uk-icon="icon: pencil"></span>
            <input type="text" name="description" id="description"
                class="uk-input @error('description') uk-form-danger @enderror" placeholder="Input description task" value="{{ $task->description }}">
        </div>
            
        <div class="uk-inline uk-width-1-4 ">
            <div class="uk-form-controls">
                <input type="checkbox" class="uk-checkbox @error('complited') uk-form-danger @enderror" name="complited"
                    @if($task->complited == 1) checked='true' @endif>
            </div>
            <label class="uk-form-label" for="compited">Complited</label>
        </div>
    </div>
    <div class="dates forms-control uk-flex uk-margin-small-bottom">
        <div class="uk-inline uk-width-1-4">
            <span class="uk-form-icon" uk-icon="icon: calendar"></span>
            <input type="datetime-local" name="date_start" id="date_start"
                uk-tooltip="Date-time start task" required class="uk-input @error('date_start') uk-form-danger @enderror"
                value="{{ $task->date_start }}">
        </div>
        <div class="uk-inline uk-width-1-4">
            <span class="uk-form-icon" uk-icon="icon: calendar"></span>
            <input type="datetime-local" name="date_end" id="date_end"
                uk-tooltip="Date-time end task" class="uk-input @error('date_end') uk-form-danger @enderror"
                value="{{ $task->date_end }}">
        </div>
        
    </div>
    

    <button type="submit" class="uk-inline uk-width-1-4 uk-button uk-button-primary">
        <span class="uk-form-icon" uk-icon="icon: push"></span>
        send
    </button>

</form>