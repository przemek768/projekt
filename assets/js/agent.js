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
    var agents = $('#agents').val();
    fd = new FormData();
    fd.append('clients', clients);
    fd.append('agents', agents);
    $.ajax({
        url: 'sql/add_offer.php',
        type: 'POST',
        data: fd,
        success: function(data){
            alert(data);
        }
    });
});