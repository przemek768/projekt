<?php
include '../DataBaseConnection.php';
$id_clients_offers = $_POST['id_clients_offers'];
$pdo->query("UPDATE clients_offers SET status = 1 WHERE id_clients_offers = '$id_clients_offers'");
header('Location: ../agent.php');