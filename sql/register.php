<?php
include ('../DataBaseConnection.php');

$user_name = $_POST['firstName'];
$user_surname = $_POST['lastName'];
$user_password = $_POST['password'];
$user_password_confirm = $_POST['passwordConfirm'];
$user_email = $_POST['email'];
$user_email_confirm = $_POST['email_confirm'];
$user_phone_number = $_POST['phone_number'];
$user_date = $_POST['date'];


if($user_password == $user_password_confirm && $user_email == $user_email_confirm) {
    $sql = "INSERT INTO users (user_name, user_lastname, password, email, phone_number, birth_date) VALUES ('$user_name', '$user_surname', '$user_password', '$user_email', '$user_phone_number', '$user_date')";
    $pdo->exec($sql);
    header('Location: ../index.php');
} else {
    echo "Hasła nie są takie same lub email nie jest taki sam";
}

