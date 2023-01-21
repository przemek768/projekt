<?php
include 'DataBaseConnection.php';
$sub = $_POST['subject'];
$min_size = $_POST['min-size'];
$min_room_number = $_POST['min-room-number'];
$max_price = $_POST['max-price'];
$localization = $_POST['localization'];
$user_id = $_POST['user_id'];
$opis = $_POST['opis'];
$pdo->query("INSERT INTO requirements (subject, min_size, min_room_number, max_price, localization, user_id, opis) VALUES ('$sub', '$min_size', '$min_room_number', '$max_price', '$localization', '$user_id', '$opis')");
header('Location: ../seller_panel.php');

