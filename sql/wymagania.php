<?php
include '../DataBaseConnection.php';
$subject = $_POST['subject'];
$min_size = $_POST['min-size'];
$min_room_number = $_POST['min-room-number'];
$max_price = $_POST['max-price'];
$localization = $_POST['localization'];
$user_id = $_SESSION['user_id'];
$pdo->query("INSERT INTO requirements (subject, min_size, min_room_number, max_price, localization, user_id) VALUES ('$subject', '$min_size', '$min_room_number', '$max_price', '$localization', '$user_id')");
header('Location: ../client_panel.php');