<?php
include('Templates/menu.php');
?>
<main class="page contact-page">
    <section class="portfolio-block contact">
        <div class="container">
            <div class="heading">
                <h2>REJESTRACJA</h2>
            </div>
            <form>
                <div class="form-group"><label for="message">Imie</label><input class="form-control" type="text" name="firstName" required="" maxlength="100" minlength="2"></div>
                <div class="form-group"><label for="message">Nazwisko</label><input class="form-control" type="text" name="lastName" required="" maxlength="100" minlength="2"></div>
                <div class="form-group"><label for="message">Hasło</label><input class="form-control" type="password" name="password" required="" minlength="7"></div>
                <div class="form-group"><label for="message">Potwierdzenie hasła</label><input class="form-control" type="password" name="passwordConfirm" required="" minlength="7"></div>
                <div class="form-group"><label for="subject">Email</label><input class="form-control item" type="email" name="email" required="" id="email"></div>
                <div class="form-group"><label for="email">Potwierdzenie emaila</label><input class="form-control item" type="email" name="email_confirm" required="" id="email"></div>
                <div class="form-group"><label for="email">Numer telefonu</label><input class="form-control" type="tel" name="phone_number" required="" placeholder="888888888" maxlength="9" minlength="9" autofocus="" inputmode="tel"></div>
                <div class="form-group"><label for="email">Data urodzenia</label><input class="form-control" type="date" name="date" required=""></div>
                <div class="form-group"><button class="btn btn-primary btn-block btn-lg" type="submit">Zarejestruj</button></div>
            </form>
        </div>
    </section>
</main>
<?php
include('Templates/footer.php');
?>
