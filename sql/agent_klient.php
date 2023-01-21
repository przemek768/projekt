<?php include '../DataBaseConnection.php';
$agents = $_POST['agents'];
$clients = $_POST['clients'];
$pdo->query("INSERT INTO agents_clients (agents, clients) VALUES ('$agents', '$clients')");
header('Location: ../owner_panel.php');

