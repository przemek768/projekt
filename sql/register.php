<?php
include ('../DataBaseConnection.php');

$data = array([
    'user_name' => $_POST['firstName'],
    'user_lastname' => $_POST['lastName'],
    'password' => $_POST['password'],
    'password_confirm' => $_POST['passwordConfirm'],
    'email' => $_POST['email'],
    'email_confirm' => $_POST['email_confirm'],
    'phone_number' => $_POST['phone_number'],
    'date_of_birth' => $_POST['date']
]);
$user_name = $data[0]['user_name'];
$user_lastname = $data[0]['user_lastname'];
$password = $data[0]['password'];
$password_confirm = $data[0]['password_confirm'];
$email = $data[0]['email'];
$email_confirm = $data[0]['email_confirm'];
$phone_number = $data[0]['phone_number'];
$date_of_birth = $data[0]['date_of_birth'];

if($data){
    if($data['password'] == $data['passwordConfirm'] && $data['email'] == $data['email_confirm']){
        $sql = "INSERT INTO users (user_name, user_lastname, password, email, phone_number, date_of_birth) VALUES ($user_name, $user_lastname, $password, $email, $phone_number, $date_of_birth)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        header('Location: ../index.php');
    }
    else{
        echo "Hasła nie są takie same";
    }
}

