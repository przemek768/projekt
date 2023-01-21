<?php
include '../DataBaseConnection.php';
$subject = $_POST['subject'];
$min_size = $_POST['min-size'];
$min_room_number = $_POST['min-room-number'];
$max_price = $_POST['max-price'];
$pdo->query("INSERT INTO wymagania (subject, min_size, min_room_number, max_price) VALUES ('$subject', '$min_size', '$min_room_number', '$max_price')");