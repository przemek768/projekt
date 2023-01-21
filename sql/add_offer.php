<?php
include '../DataBaseConnection.php';
$client_id = $_POST['clients'];
$offer_id = $_POST['offers'];
$pdo->query("INSERT INTO clients_offers (clients, offers) VALUES ('$client_id', '$offer_id')");
header('Location: ../agent.php');
