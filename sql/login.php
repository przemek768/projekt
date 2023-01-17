<?php
include ('../DataBaseConnection.php');

if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
    header('Location: ../client_panel.php');
    exit;
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
$result = $pdo->query($sql);
if($result){
    $user = $result->fetch();
    if($user){
        session_start();
        $_SESSION['user'] = true;
        $_SESSION['user_id'] = $user['user_id'];
        header('Location: ../client_panel.php');
    } else {
        echo "Niepoprawny email lub hasło";
    }
} else {
    echo "Błąd bazy danych";
}