<?php
include '../DataBaseConnection.php';
$client_id = $_POST['clients'];
$offer_id = $_POST['offers'];
$status = 0;
$pdo->query("INSERT INTO clients_offers (client_id, offer_id, status) VALUES ('$client_id', '$offer_id', '$status')");
header('Location: ../agent.php');
