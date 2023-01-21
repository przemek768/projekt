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
    $clients = array_push($clients, $client);
}
?>
<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>PANEL AGENTA</h2>
                <?php var_dump($clients); ?>
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
                            <h1>Przypisani klienci</h1><select class="form-control" name="clients"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option></optgroup></select></div>
                        <div class="col">
                            <h1>Znalezione oferty</h1><select class="form-control" name="offers"><optgroup label="This is a group"><option value="12" selected="">This is item 1</option></optgroup></select></div>
                    </div>
                    <p class="text-center"><button class="btn btn-primary" type="button" style="margin-left: auto;margin-right: auto;">Dodaj ofertę</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'Templates/footer.php'; ?>
