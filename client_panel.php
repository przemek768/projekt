<?php include 'Templates/header.php'; ?>
<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>PANEL KUPUJĄCEGO</h2>
            </div>
        </div>
    </section>
</main>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <h1>Wymagania</h1>
                <?php
                $wymagania = $pdo->query("SELECT * FROM requirements WHERE user_id = '$user_id'");
                $wymagania = $wymagania->fetchAll();
                $wymagania_count = count($wymagania);

                if($wymagania_count > 0){
                    echo'
                        <form method="post" action="sql/wymagania_update.php">
                    <div class="form-group"><label for="subject">Rodzaj nieruchomości</label><select class="form-control" name="subject" id="subject"><option value="gruntowe">gruntowe</option><option value="lokalowe">lokalowe</option><option value="budynkowe">budynkowe</option></select></div>
                    <div
                        class="form-group"><label>Lokalizacja</label><input name="localization" id="localization" class="form-control" type="text"></div>
                    <div class="form-group"><label for="email">Minimalny rozmiar<br></label><input id="min-size" name="min-size" class="form-control" type="number" name="size" min="5" max="5000" step="1"></div>
                    <div class="form-group"><label for="email">Minimalna liczba pokoi<br></label><input id="min-room-number" name="min-room-number" class="form-control" type="number" name="size" min="1" max="999" step="1"></div>
                    <div class="form-group"><label for="email">Maksymalna cena<br></label><input name="max-price" id="max-price" class="form-control" type="number" name="size"></div>
                    <input type="hidden" name="user_id" value="'.$user_id.'">
                    <div class="col d-xl-flex justify-content-xl-center align-items-xl-end"><button class="btn btn-primary btn-block btn-lg text-center d-xl-flex justify-content-xl-center" type="submit">Zaktualizuj wmagania</button></div>
                </form>
                    ';
                }else{
                    echo'
                    <form method="post" action="sql/wymagania.php">
                    <div class="form-group"><label for="subject">Rodzaj nieruchomości</label><select class="form-control" name="subject" id="subject"><option value="gruntowe">gruntowe</option><option value="lokalowe">lokalowe</option><option value="budynkowe">budynkowe</option></select></div>
                    <div
                        class="form-group"><label>Lokalizacja</label><input name="localization" id="localization" class="form-control" type="text"></div>
                    <div class="form-group"><label for="email">Minimalny rozmiar<br></label><input id="min-size" name="min-size" class="form-control" type="number" name="size" min="5" max="5000" step="1"></div>
                    <div class="form-group"><label for="email">Minimalna liczba pokoi<br></label><input id="min-room-number" name="min-room-number" class="form-control" type="number" name="size" min="1" max="999" step="1"></div>
                    <div class="form-group"><label for="email">Maksymalna cena<br></label><input name="max-price" id="max-price" class="form-control" type="number" name="size"></div>
                    <input type="hidden" name="user_id" value="'.$user_id.'">
                    <div class="col d-xl-flex justify-content-xl-center align-items-xl-end"><button class="btn btn-primary btn-block btn-lg text-center d-xl-flex justify-content-xl-center" type="submit">Zatwierdź wymagania</button></div>
                </form>';
                }
                ?>
            </div>
            <div class="col-md-12 col-xl-6">
                <h1>Oferty</h1>
                <form>
                    <h2 class="text-center">Tytuł oferty</h2>
                    <p class="text-center">Rodzaj nieruchomości: lokalowa</p>
                    <p class="text-center">Lokalizacja: adres</p>
                    <p class="text-center">Rozmiar: 20m2</p>
                    <p class="text-center">Liczba pokoi: 10</p>
                    <p class="text-center">Cena: 400000 zł</p>
                    <p class="text-center">Opis: Fajne mieszkanie</p><button class="btn btn-primary text-center d-xl-flex" type="button" style="margin-left: auto;margin-right: auto;">Pokaż więcej</button></form>
            </div>
        </div>
    </div>
</div>
<?php include 'Templates/footer.php'; ?>
