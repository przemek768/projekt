<?php include 'Templates/header.php'; ?>
<?php
$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM agents_clients WHERE agents = '$user_id'";
$agents_clients = $pdo->query($sql);
$agents_clients = $agents_clients->fetchAll();
$clients = [];
foreach ($agents_clients as $agents_client){
    $client = $pdo->query("SELECT * FROM users WHERE user_id = '$agents_client[clients]'");
    $client = $client->fetchAll();
    $clients [] = $client;
}
?>
<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>PANEL AGENTA</h2>
            </div>
        </div>
    </section>
</main>
<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form>
                    <div class="form-row">
                        <div class="col">
                            <h1>Przypisani klienci</h1><select class="form-control client" name="clients"><optgroup label="This is a group">
                                    <?php foreach ($clients as $client){
                                        echo '<option value="'. $client[0]['user_id'] .'">'. $client[0]['name'] .' '. $client[0]['surname'] .'</option>';
                                    }?>
                                </optgroup>
                            </select></div>
                        <div class="col">
                            <h1>Znalezione oferty</h1><select class="form-control" name="offers">
                                <optgroup class="change" label="This is a group">
                                    <option value="12" selected="">This is item 1</option>
                                </optgroup>
                            </select></div>
                    </div>
                    <p class="text-center"><button class="btn btn-primary" type="button" style="margin-left: auto;margin-right: auto;">Dodaj ofertę</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
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
</script>
<?php include 'Templates/footer.php'; ?>
