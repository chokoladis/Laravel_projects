<div id="modal-close-default" uk-modal>
    <div class="uk-modal-dialog uk-modal-body uk-width-1-1">
        <button class="uk-modal-close-default" type="button" uk-close></button>
        <h2 class="uk-modal-title">Add task</h2>
        <form action="{{ route('page-todolist-add')  }}" method="post" class="form_todolist_add uk-flex uk-flex-column">
                
            @csrf
        
            <div class="forms-control uk-flex">
                <div class="uk-inline uk-width-1-4">
                    <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                    <input type="text" name="title" id="title" placeholder="Input title task" required class="uk-input @error('title') uk-form-danger @enderror">
                </div>
                <div class="uk-inline uk-width-2-4">
                    <span class="uk-form-icon" uk-icon="icon: pencil"></span>
                    <input type="text" name="description" id="description" class="uk-input @error('description') uk-form-danger @enderror"  aria-label="Not clickable icon" placeholder="Input description task">
                </div>
                 
                <div class="uk-inline uk-width-1-4 ">
                    <div class="uk-form-controls">
                        <input type="checkbox" class="uk-checkbox" id="compited" name="compited">
                    </div>
                    <label class="uk-form-label" for="compited">Complited</label>
                </div>
            </div>
            
        
            <button type="submit" class="uk-inline uk-width-1-4 uk-margin-small-top uk-button uk-button-primary">
                <span class="uk-form-icon" uk-icon="icon: push"></span>
                send
            </button>
        
        </form>
    </div>
</div>
