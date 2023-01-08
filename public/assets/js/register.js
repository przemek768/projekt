$(document).on('click', '#register', function() {
    var username = $('#username').val();
    var password = $('#password').val();
    var email = $('#email').val();
    var name = $('#name').val();
    $.ajax({
        url: 'http://localhost:3000/register',
        type: 'POST',
        data: {
            username: username,
            password: password,
            email: email,
            name: name
        },
        success: function(data) {
            console.log(data);
        }
    });
}