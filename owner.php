<?php include 'Templates/header.php'; ?>
<?php
$agents = $pdo->query("SELECT * FROM users WHERE role = '2'");
$agents = $agents->fetchAll();
$check_exists_clients = $pdo->query("SELECT * FROM agents_clients");
$check_exists_clients = $check_exists_clients->fetchAll();
$clients = $pdo->query("SELECT * FROM users WHERE role = '1'");
$clients = $clients->fetchAll();
?>
<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>PANEL Kierownika</h2>
            </div>
        </div>
    </section>
</main>
<div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="sql/agent_klient.php" method="post">
                    <div class="form-row">
                        <div class="col">
                            <h1>Dostępni agenci</h1><select class="form-control" id="agents" name="agents">
                                <optgroup label="This is a group">
                                    <?php
                                    foreach ($agents as $agent){
                                        echo '<option value="'. $agent['user_id'] .'">'. $agent['name'] .' '. $agent['surname'] .'</option>';
                                    }
                                    ?>
                                </optgroup>
                            </select></div>
                        <div class="col">
                            <h1>Klienci bez agenta</h1><select class="form-control" id="clients" name="clients"><optgroup label="This is a group">
                                    <?php foreach ($clients as $client){
                                        $check = false;
                                        foreach ($check_exists_clients as $check_exists_client){
                                            if($check_exists_client['user_id'] == $client['user_id']){
                                                $check = true;
                                            }
                                        }
                                        if($check == false){
                                            echo '<option value="'. $client['user_id'] .'">'. $client['name'] .' '. $client['surname'] .'</option>';
                                        }
                                    }?>
                                </optgroup>
                            </select></div>
                    </div>
                    <p class="text-center"><button class="btn btn-primary" type="submit" style="margin-left: auto;margin-right: auto;">Przypisz agenta</button></p>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include 'Templates/footer.php'; ?>
