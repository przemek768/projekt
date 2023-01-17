<!DOCTYPE html>
<html>
<?php include('DataBaseConnection.php');
session_start();
if(isset($_SESSION['user']) && !empty($_SESSION['user'])){
    $user_id = $_SESSION['user_id'];
};
$username = $pdo->query("SELECT user_name FROM users WHERE user_id = '$user_id'");
$username = $username->fetch();
$username = $username['user_name'];

?>
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
</head>

<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
    <div class="container"><a class="navbar-brand logo" href="strona_glowna.html">System Zarządzania Biurem Nieruchomości</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        <div
            class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item" role="presentation"><a class="nav-link active" href="panel_kupujacy.html">Panel kupującego</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="panel_sprzedajacy.html">Panel sprzedającego</a></li>
                <?php if($user_id){
                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="/client_panel.php">Cześć, '. $username .'</a></li>';
                }else{
                    echo '<li class="nav-item" role="presentation"><a class="nav-link" href="/login.php">Zaloguj</a></li>';
                }
                    ?>
            </ul>
        </div>
    </div>
</nav>
