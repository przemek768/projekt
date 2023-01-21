<?php
include '../DataBaseConnection.php';
$name = $_POST['firstName'];
$surname = $_POST['lastName'];
$password = $_POST['password'];
$passwordConfirm = $_POST['passwordConfirm'];
$email = $_POST['email'];
$emailConfirm = $_POST['email_confirm'];
$phoneNumber = $_POST['phone_number'];
$date = $_POST['date'];
$role = '1';
if($password == $passwordConfirm && $email == $emailConfirm){
    $pdo->query("INSERT INTO users (name, surname, password, email, phone_number, date, role) VALUES ('$name', '$surname', '$password', '$email', '$phoneNumber', '$date', '$role')");
    header('Location: ../index.php');
}else{
    echo 'Hasła nie są takie same! lub adresy e-mail nie są takie same!';
}