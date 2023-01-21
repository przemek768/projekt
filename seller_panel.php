<?php include 'header.php'; ?>
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
                <form>
                    <div class="form-group"><label for="subject">Rodzaj nieruchomości</label><select class="form-control" id="subject"><option value="gruntowe">gruntowe</option><option value="lokalowe">lokalowe</option><option value="budynkowe">budynkowe</option></select></div>
                    <div
                        class="form-group"><label>Lokalizacja</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label for="email">Rozmiar<br></label><input class="form-control" type="number" name="size" min="5" max="5000" step="1"></div>
                    <div class="form-group"><label for="email">Liczba pokoi<br></label><input class="form-control" type="number" name="size" min="1" max="999" step="1"></div>
                    <div class="form-group"><label for="email">Cena<br></label><input class="form-control" type="number" name="size" min="1" max="9999999999" step="1000"></div>
                    <div class="form-group"><label for="email">Opis<br></label><textarea class="form-control"></textarea><button class="btn btn-primary btn-block btn-lg text-center d-xl-flex justify-content-xl-center" type="submit">Zatwierdź wymagania</button></div>
                </form>
            </div>
            <div class="col">
                <h1>Twoje oferty</h1>
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
