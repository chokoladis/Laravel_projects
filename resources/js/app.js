require('./bootstrap');

$(document).ready(function(){

    for (let key of $('input')){
        if ($(key).hasClass('uk-form-danger')){
            $(key).removeClass('uk-form-blank');    
        }
    }
    
    $('.uk-navbar-nav > li').on('click', function(){
        $(this).toggleClass('active');
    });
    
    $('.bottom_btns .add').on('click', function(){
        $.ajax({
            url: '/todolist/create',
            method: 'get',
            success: function(data){
                $('#modal_todolist .content').empty();
                $('#modal_todolist .content').html(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('#modal_todolist .content').empty();
                $('#modal_todolist .content').html('<br>'+xhr.status+'<br>'+thrownError);
            }
        }) 
    });
    
    $('.bottom_btns .update').on('click', function(){
    
        let parent = $(this).parents('.row_list');
        let id = parent.attr('data-id');
    
        $.ajax({
            url: '/todolist/task_'+id+'/edit',
            method: 'get',
            success: function(data){
                $('#modal_todolist .content').empty();
                $('#modal_todolist .content').html(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('#modal_todolist .content').empty();
                $('#modal_todolist .content').html('<br>'+xhr.status+'<br>'+thrownError);
            }
        }) 
    });

    // $('.bottom_btns .delete').on('click', function(){
    
    //     let parent = $(this).parents('.row_list');
    //     let id = parent.attr('data-id');
    
    //     $.ajax({
    //         url: '/todolist/task_'+id+'/delete/submit',
    //         method: 'post',
    //         data: {'id': id},
    //         success: function(data){
    //             UIkit.notification({
    //                 message: data,
    //                 status: 'success',
    //                 pos: 'bottom-center',
    //                 timeout: 5000
    //             });
    //         },
    //         error: function (xhr, ajaxOptions, thrownError) {
    //             UIkit.notification({
    //                 message: '<br>'+xhr.status+'<br>'+thrownError,
    //                 status: 'success',
    //                 pos: 'bottom-center',
    //                 timeout: 5000
    //             });
    //         }
    //     }) 
    // });
    

});