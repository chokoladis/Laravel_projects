require('./bootstrap');

for (let key of $('input')){
    if ($(key).hasClass('uk-form-danger')){
        $(key).removeClass('uk-form-blank');    
    }
}

$('.uk-navbar-nav > li').on('click', function(){
    $(this).toggleClass('active');
});