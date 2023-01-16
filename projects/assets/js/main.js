$ = jQuery.noConflict(true);

$(document).on('click','.register', function(e){
    e.preventDefault();
    e.stopPropagation();
    fd.append('action', 'show-register');
    wp.ajax.send( "showRegister", {
        processData: false,
        contentType: false,
        cache: false
    }).done(function(response) {
        $('.modal-body').html();
        $('.modal-body').html(response);
    });
});
$(document).on('click','.login', function(e){
    e.preventDefault();
    e.stopPropagation();
    fd.append('action', 'show-login');
    wp.ajax.send( "showLogin", {
        processData: false,
        contentType: false,
        cache: false
    }).done(function(response) {
        $('.modal-body').html();
        $('.modal-body').html(response);
    });
});
