<?php include ('Templates/header.php'); ?>
<?php include ('DataBaseConnection.php'); ?>
<?php
$user_id = $_SESSION['user_id'];
$wymagania = $pdo->query("SELECT * FROM wymagania WHERE user_id = '$user_id'");
$wymagania = $wymagania->fetchAll();
foreach ($wymagania as $wy){
    $wymagania_id = $wy['id_wymagania'];
}
$wymagania_specjalne = $pdo->query("SELECT * FROM wymagania_specjalne WHERE id_wymagania = '$wymagania_id'");
$wymagania_specjalne = $wymagania_specjalne->fetchAll();
?>
<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>PANEL KUPUJĄCEGO</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"></a>
                        <div class="card-body">
                            <h6><a href="#">DODAJ WYMAGANIA</a></h6>
                            <p class="text-muted card-text">Zakładka dodawania wymagań</p>
                            <a class="btn btn-primary" href="/wymagania.php">Dodaj</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"></a>
                        <div class="card-body">
                            <h6><a href="#">DOPASOWANE OFERTY</a></h6>
                            <p class="text-muted card-text">Zakładka dopasowanych ofert</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"></a>
                        <div class="card-body">
                            <h6><a href="#"></a><a href="#">FINALIZACJA OFERT</a></h6>
                            <p class="text-muted card-text">Zakładka finalizacji</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"></a>
                        <div class="card-body">
                            <h6><a href="#">OBECNE WYMAGANIA</a></h6>
                            <ul>
                                <?php
                                foreach ($wymagania as $w){
                                    echo '<li> '. $w .'
                                </li>';
                                }
                                foreach ($wymagania_specjalne as $ws){
                                    if($ws['status_wymagania'] == 1){
                                        echo '<li> '. $ws['nazwa_wymagania'] .'
                                    </li>';
                                    }
                                }

                                ?>
                                
                            </ul>
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"></a>
                        <div class="card-body">
                            <h6><a href="#">TWÓJ AGENT</a></h6>
                            <p class="text-muted card-text"></p>
                            <p class="text-muted card-text">Imie nazwisko: Mariusz Bąk</p>
                            <p class="text-muted card-text">Identyfikator: 140132</p>
                            <p class="text-muted card-text">Numer telefonu: 632 432 562</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"></a>
                        <div class="card-body">
                            <h6><a href="#">KONTAKT Z CENTRALĄ</a></h6>
                            <p class="text-muted card-text">Nazwa firmy: System Zarządzania Biurem Nieruchomości</p>
                            <p class="text-muted card-text">Adres: Akacjowa 14, 10-041 Olsztyn</p>
                            <p class="text-muted card-text">NIP: 0041023121</p>
                            <p class="text-muted card-text">Numer telefonu:<br>593 023 123</p>
                            <p class="text-muted card-text">Email:&nbsp;<br>olsztyn@szbn.pl</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include ('Templates/footer.php'); ?>
