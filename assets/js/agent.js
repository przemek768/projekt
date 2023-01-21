$(document).ready(function(){
    $('select.client').change(function(){
        let client_id = $(this).val();
        console.log(client_id);
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
$(document).ready(function(){
    let client_id = $(this).val();
    console.log(client_id);
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
$(document).on('click', '.btn-primary', function(){
    var clients = $('#clients').val();
    var offers = $('#offers').val();
    $.ajax({
        url: 'sql/add_offer.php',
        type: 'POST',
        data: {clients: clients, offers: offers},
        success: function(data){
            location.reload();
        }
    });
});