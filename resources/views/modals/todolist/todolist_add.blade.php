<h2 class="uk-modal-title">Add task</h2>
<form action="{{ route('todolist.store')  }}" method="post" class="form_todolist_add uk-flex uk-flex-column">
        
    @csrf

    <div class="forms-control uk-flex uk-margin-small-bottom">
        <div class="uk-inline uk-width-1-5">
            <span class="uk-form-icon" uk-icon="icon: pencil"></span>
            <input type="text" name="title" id="title" placeholder="Input title task" required class="uk-input @error('title') uk-form-danger @enderror">
        </div>
        <div class="uk-inline uk-width-3-5">
            <span class="uk-form-icon" uk-icon="icon: pencil"></span>
            <input type="text" name="description" id="description" class="uk-input @error('description') uk-form-danger @enderror"  aria-label="Not clickable icon" placeholder="Input description task">
        </div>
            
        <div class="uk-inline uk-width-1-5">
            <div class="uk-form-controls">
                <input type="checkbox" class="uk-checkbox @error('complited') uk-form-danger @enderror" name="complited">
            </div>
            <label class="uk-form-label" for="complited">Complited</label>
        </div>
    </div>
    <div class="dates forms-control uk-flex uk-margin-small-bottom">
        <div class="uk-inline uk-width-1-5">
            <span class="uk-form-icon" uk-icon="icon: calendar"></span>
            <input type="datetime-local" name="date_start" id="date_start" uk-tooltip="Date-time start task" required class="uk-input @error('date_start') uk-form-danger @enderror">
        </div>
        <div class="uk-inline uk-width-1-5">
            <span class="uk-form-icon" uk-icon="icon: calendar"></span>
            <input type="datetime-local" name="date_end" id="date_end" uk-tooltip="Date-time end task" class="uk-input @error('date_end') uk-form-danger @enderror">
        </div>
        <div class="uk-inline uk-width-1-5">
            <select class="uk-select" aria-label="Select" name="user_id" id="user_id" uk-tooltip="Choose user">
                @foreach($users as $user)
                    <option value="{{ $user->id }}">{{ $user->username }}</option>
                @endforeach
            </select>
        </div>
    </div>
    

    <button type="submit" class="uk-inline uk-width-1-4 uk-button uk-button-primary">
        <span class="uk-form-icon" uk-icon="icon: push"></span>
        send
    </button>

</form>