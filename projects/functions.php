<?php
date_default_timezone_set('Europe/Warsaw');
function Projekt_theme_support()
{
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'Projekt_theme_support');


function Project_register_style()
{
    wp_enqueue_style('Projekt_style', get_template_directory_uri() . "/style.css", array(), '1.2');
    wp_enqueue_style('Projekt_style1', get_template_directory_uri() . "/assets/bootstrap/css/bootstrap.min.css", array(), '1.2');
    wp_enqueue_style('Projekt_style2', get_template_directory_uri() . "/assets/fonts/ionicons.min.css", array(), '1.2');
    wp_enqueue_style('Projekt_style3', get_template_directory_uri() . "/assets/css/Article-List.css", array(), '1.2');
    wp_enqueue_style('Projekt_style4', get_template_directory_uri() . "/assets/css/Login-Form-Clean.css", array(), '1.2');
    wp_enqueue_style('Projekt_style5', get_template_directory_uri() . "/assets/css/NavBar-Notifications-Panel-1.css", array(), '1.2');
    wp_enqueue_style('Projekt_style6', get_template_directory_uri() . "/assets/css/NavBar-Notifications-Panel.css", array(), '1.2');

}

function Project_register_scripts()
{
    wp_enqueue_script("jquery", "https://code.jquery.com/jquery-3.6.1.min.js");
    wp_enqueue_script("jquery-ui", "https://code.jquery.com/ui/1.13.2/jquery-ui.min.js");
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.min.js");
    wp_enqueue_script("projekt-js", get_template_directory_uri() . "/assets/js/theme.js");
    wp_enqueue_script("main-js", get_template_directory_uri() . "/assets/js/main.js");
}

add_action('wp_enqueue_scripts', 'Project_register_scripts');
add_action('wp_enqueue_scripts', 'Project_register_style');

function showRegister(){
    $response = '<main class="page contact-page">
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
    </main>';
    wp_send_json_success($response);
}
add_action('wp_ajax_show-register', 'showRegister');
add_action('wp_ajax_nopriv_show-register', 'showRegister');

function showLogin(){
    $response = '<main class="page lanidng-page"></main>
    <div class="login-clean">
        <form method="post">
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration" style="color: rgb(71,119,244);"><i class="icon ion-ios-navigate"></i></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><a class="btn btn-primary btn-block" role="button" href="strona_glowna.html" style="background-color: rgb(71,119,244);">Log In</a></div>
        </form>
    </div>';
    wp_send_json_success($response);
}
add_action('wp_ajax_show-login', 'showLogin');
add_action('wp_ajax_nopriv_show-login', 'showLogin');


