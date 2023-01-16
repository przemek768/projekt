<?php
/**
 * Template Name: Funkcje
 *
 * @package Projekt
 * @subpackage Projekt
 * @since Projekt 1.0
 */
?>


<?php
get_header();
?>
<?php

?>

<main class="page cv-page">
    <section class="portfolio-block block-intro border-bottom">
        <div class="container">
            <div class="avatar" style="background-image: url(&quot;../assets/img/Black%20Monoline%20Real%20Estate%20Logo.png&quot;);width: 300px;height: 200px;filter: blur(0px) brightness(100%);"></div>
            <div class="about-me">
                <p>Witaj! Jesteśmy biurem nieruchomości które pomoże Ci znaleźć twój wymarzony dom lub mieszkanie!</p><button class="btn btn-outline-primary" data-toggle="modal" data-target="#Register">Zarejestruj się</button></div>
        </div>
    </section>
</main>
<div class="modal fade" id="Register" tabindex="-1" role="dialog" aria-labelledby="Register" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="register btn btn-primary">Rejestracja</button>
                <button class="login btn btn-primary">Logowanie</button>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
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
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>
