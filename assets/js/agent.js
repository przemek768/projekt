$(document).ready(function(){
    $('select.client').change(function(){
        var client_id = $(this).val();
        $.ajax({
            url: 'sql/show_offers.php',
            type: 'POST',
            data: {client_id: client_id},
            success: function(data){
                $('.change').html();
                $('.change').html(data);
            }
        });
    });
});
$(document).on('click', '.btn-primary', function(){
    var clients = $('#clients').val();
    var agents = $('#offers').val();
    fd = new FormData();
    $.ajax({
        url: 'sql/add_offer.php',
        type: 'POST',
        data: {clients: clients, agents: agents},
        success: function(data){
            alert(data);
        }
    });
});