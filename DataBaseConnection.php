<?php
$pdo = new PDO('mysql:host=localhost;dbname=database', 'test', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
?>
$pdo = new PDO('mysql:host=127.0.0.1:3307;dbname=projekt', 'root', 'root');
?>
