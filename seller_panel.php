<?php include 'Templates/header.php'; ?>
<?php session_start(); ?>
<?php
$offerts = $pdo->query("SELECT * FROM offers WHERE user_id = '$user_id'");
$offerts = $offerts->fetchAll();
?>
<main class="page projects-page">
    <section class="portfolio-block projects-cards">
        <div class="container">
            <div class="heading">
                <h2>PANEL SPRZEDAJĄCEGO</h2>
            </div>
        </div>
    </section>
</main>
<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <h1>Oferty</h1>
                <form method="post" action="sql/seller.php">
                    <div class="form-group"><label for="subject">Rodzaj nieruchomości</label><select class="form-control" name="subject" id="subject"><option value="gruntowe">gruntowe</option><option value="lokalowe">lokalowe</option><option value="budynkowe">budynkowe</option></select></div>
                    <div
                        class="form-group"><label>Lokalizacja</label><input name="localization" id="localization" class="form-control" type="text"></div>
                    <div class="form-group"><label for="email">Rozmiar<br></label><input class="form-control" name="min-size" id="size" type="number" name="size" min="5" max="5000" step="1"></div>
                    <div class="form-group"><label for="email">Liczba pokoi<br></label><input class="form-control" name="min-room-number" id="room-number" type="number" name="size" min="1" max="999" step="1"></div>
                    <div class="form-group"><label for="email">Cena<br></label><input class="form-control" type="number" name="max-price" id="max-price"></div>
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user_id ?>">
                    <div class="form-group"><label for="email">Opis<br></label><textarea name="opis" id="opis" class="form-control"></textarea><button class="btn btn-primary btn-block btn-lg text-center d-xl-flex justify-content-xl-center" type="submit">Zatwierdź wymagania</button></div>
                </form>
            </div>
            <div class="col">
                <h1>Twoje oferty</h1>
                <div class="swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <?php foreach ($offerts as $offert){
                            echo '
                            <div class="swiper-slide">
                            <form>
                                <h2 class="text-center">'. $offert['subject'] .' ' . $offert['localization'] .'</h2>
                                <p class="text-center">Rodzaj nieruchomości: '. $offert['subject'] .'</p>
                                <p class="text-center">Lokalizacja: ' . $offert['localization'] .'</p>
                                <p class="text-center">Rozmiar: ' . $offert['min_size'] .'</p>
                                <p class="text-center">Liczba pokoi: ' . $offert['min_room_number'] .'</p>
                                <p class="text-center">Cena: ' . $offert['max_price'] .' zł</p>
                                <p class="text-center">Opis: ' . $offert['opis'] .'</p></form>
                        </div>
                            ';
                        }

                        ?>
                        ...
                    </div>
                    <!-- If we need pagination -->
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <div class="swiper-scrollbar"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'Templates/footer.php'; ?>
