require('./bootstrap');

for (let key of $('input')){
    if ($(key).hasClass('uk-form-danger')){
        $(key).removeClass('uk-form-blank');    
    }
}