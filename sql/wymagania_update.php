<?php
include '../DataBaseConnection.php';
$subject = $_POST['subject'];
$min_size = $_POST['min-size'];
$min_room_number = $_POST['min-room-number'];
$max_price = $_POST['max-price'];
$localization = $_POST['localization'];
$user_id = $_POST['user_id'];
$sql = ("UPDATE requirements SET subject = '$subject', min_size = '$min_size', min_room_number = '$min_room_number', max_price = '$max_price', localization = '$localization' WHERE user_id = '$user_id'");
$pdo->query($sql);
header('Location: ../client_panel.php');
