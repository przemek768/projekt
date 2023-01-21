<?php include 'DataBaseConnection.php'; ?>
<?php
session_start();
if($_SESSION['user']){
    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['name'];
    $role = $_SESSION['role'];
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>CV - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="assets/css/NavBar-Notifications-Panel-1.css">
    <link rel="stylesheet" href="assets/css/NavBar-Notifications-Panel.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">

</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="strona_glowna.html">System Zarządzania Biurem Nieruchomości</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <?php
                if($role == 1){
                    echo'
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="panel_kupujacy.html">Panel kupującego</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="panel_sprzedajacy.html">Panel sprzedającego</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hire-me.html">Cześć, '. $username .'</a></li>
                    ';
                }elseif ($role == 2){
                    echo'
                    <li class="nav-item" role="presentation"><a class="nav-link" href="panel_sprzedajacy.html">Panel agenta</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hire-me.html">Cześć, '. $username .'</a></li>
                    ';
                }elseif($role == 3){
                    echo '
                    <li class="nav-item" role="presentation"><a class="nav-link" href="panel_sprzedajacy.html">Panel kierownika</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="hire-me.html">Cześć, '. $username .'</a></li>
                    ';
                }else{
                    echo'
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/login.php">Logowanie</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/register.php">Rejestracja</a></li>
                    ';
                }
                ?>

            </ul>
        </div>
    </div>
</nav>

