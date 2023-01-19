<?php include ('Templates/header.php'); ?>
<main class="page hire-me-page">
    <section class="portfolio-block hire-me">
        <div class="container">
            <div class="heading">
                <h2>WYMAGANIA</h2>
            </div>
            <form action="sql/wymagania.php" method="post">
                <div class="form-group"><label for="subject">Rodzaj nieruchomości</label><select name="rodzaj_nieruchomosci" class="form-control" id="subject">
                        <option value="land" selected="">gruntowe</option>
                        <option value="local">lokalowe</option>
                        <option value="building">budynkowe</option>
                    </select>
                </div>
                <div class="form-group"><label>Lokalizacja</label><input name="lokalizacja" class="form-control" type="text"></div>
                <div class="form-group"><label for="email">Minimalny rozmiar (m²)<br></label><input name="min_rozmiar" class="form-control" type="number" value="20" placeholder="20" min="5" max="5000" step="1"></div>
                <div class="form-group"><label for="email">Liczba pokoi (minimum)<br></label><input name="liczba_pokoi" class="form-control" type="number" value="3" placeholder="3" min="5" max="5000" step="1"></div>
                <div class="form-group"><label for="email">Maksymalna cena (PLN)<br></label><input name="max_cena" class="form-control" type="number" min="0" max="9999999" step="100"></div><label for="email">Wymagania specjalne<br></label>
                <div class="form-row">
                    <div class="col">
                        <div class="form-check"><input name="klimatyzacja" value="0" class="form-check-input" type="checkbox" id="formCheck-2"><label class="form-check-label" for="formCheck-2">Klimatyzacja</label></div>
                        <div class="form-check"><input name="balkon" value="0" class="form-check-input" type="checkbox" id="formCheck-3"><label class="form-check-label" for="formCheck-3">Balkon</label></div>
                        <div class="form-check"><input name="piwnica" value="0" class="form-check-input" type="checkbox" id="formCheck-4"><label class="form-check-label" for="formCheck-4">Piwnica</label></div>
                        <div class="form-check"><input name="garaz" value="0" class="form-check-input" type="checkbox" id="formCheck-9"><label class="form-check-label" for="formCheck-9">Garaż</label></div>
                    </div>
                    <div class="col">
                        <div class="form-check"><input name="winda" value="0" class="form-check-input" type="checkbox" id="formCheck-5"><label class="form-check-label" for="formCheck-5">Winda</label></div>
                        <div class="form-check"><input name="strzezone" value="0" class="form-check-input" type="checkbox" id="formCheck-6"><label class="form-check-label" for="formCheck-6">Strzeżone osiedle</label></div>
                        <div class="form-check"><input name="do_remontu" value="0" class="form-check-input" type="checkbox" id="formCheck-7"><label class="form-check-label" for="formCheck-7">Do remontu</label></div>
                        <div class="form-check"><input name="dla_niepelnosprawnych" value="0" class="form-check-input" type="checkbox" id="formCheck-8"><label class="form-check-label" for="formCheck-8">Dostowane dla niepełnosprawnych</label></div>
                    </div>
                </div>
                <div class="col d-xl-flex justify-content-xl-center align-items-xl-end"><button class="btn btn-primary btn-block btn-lg text-center d-xl-flex justify-content-xl-center" type="submit">Zatwierdź wymagania</button></div>
            </form>
        </div>
    </section>
</main>
<?php include ('Templates/footer.php'); ?>


