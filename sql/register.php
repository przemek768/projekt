<?php
include ('../DataBaseConnection.php');

$data = array([
    'user_name' => $_POST['firstName'],
    'user_lastname' => $_POST['lastName'],
    'password' => $_POST['password'],
    'email' => $_POST['email'],
    'phone_number' => $_POST['phone_number'],
    'date_of_birth' => $_POST['date']
]);

if($data){
    if($data['password'] == $data['passwordConfirm'] && $data['email'] == $data['email_confirm']){
        $sql = "INSERT INTO users (user_name, user_lastname, password, email, phone_number, date_of_birth) VALUES (:user_name, :user_lastname, :password, :email, :phone_number, :date_of_birth)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute($data);
        header('Location: ../index.php');
    }
    else{
        echo "Hasła nie są takie same";
    }
}

