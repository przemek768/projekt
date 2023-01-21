<?php
include '../DataBaseConnection.php';
$email = $_POST['email'];
$password = $_POST['password'];
$data_check = $pdo->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
if($data_check->rowCount() > 0) {
    session_start();
    $data = $data_check->fetch();
    $_SESSION['user'] = true;
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['name'] = $data['name'];
    $_SESSION['surname'] = $data['surname'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['phone_number'] = $data['phone_number'];
    $_SESSION['date'] = $data['date'];
    $_SESSION['role'] = $data['role'];
    header('Location: ../index.php');
}else{
    echo 'Niepoprawne dane logowania!';
}