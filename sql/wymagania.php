<?php
include ('../DataBaseConnection.php');

$rodzaj_nieruchomosci = $_POST['rodzaj_nieruchomosci'];
$lokalizacja = $_POST['lokalizacja'];
$min_rozmiar = $_POST['min_rozmiar'];
$liczba_pokoi = $_POST['liczba_pokoi'];
$max_cena = $_POST['max_cena'];
$klimatyzacja = $_POST['klimatyzacja'];
$balkon = $_POST['balkon'];
$piwnica = $_POST['piwnica'];
$garaz = $_POST['garaz'];
$winda = $_POST['winda'];
$strzezone = $_POST['strzezone'];
$do_remontu = $_POST['do_remontu'];
$dla_niepelnosprawnych = $_POST['dla_niepelnosprawnych'];

$id_wymagania = $pdo->query("SELECT * FROM wymagania ORDER BY id_wymagania DESC LIMIT 1");
$id_wymagania = $id_wymagania->fetch();
$id_wymagania = $id_wymagania['id_wymagania'];

if($id_wymagania == null)
{
    $id_wymagania = 1;
}else {
    $id_wymagania = $id_wymagania+1;
}

$sql1 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'klimatyzacja', '$klimatyzacja')";
$pdo->exec($sql1);
$sql2 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'balkon', '$balkon')";
$pdo->exec($sql2);
$sql3 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'piwnica', '$piwnica')";
$pdo->exec($sql3);
$sql4 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'garaz', '$garaz')";
$pdo->exec($sql4);
$sql5 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'winda', '$winda')";
$pdo->exec($sql5);
$sql6 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'strzezone', '$strzezone')";
$pdo->exec($sql6);
$sql7 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'do_remontu', '$do_remontu')";
$pdo->exec($sql7);
$sql8 = "INSERT INTO wymagania_specjalne(id_wymagania, nazwa_wymagania, status_wymagania) VALUES ('$id_wymagania', 'dla_niepelnosprawnych', '$dla_niepelnosprawnych')";
$pdo->exec($sql8);

$sql = "INSERT INTO wymagania(rodzaj_nieruchomosci, lokalizacja, min_rozmiar, liczba_pokoi, max_cena)
 VALUES ('$rodzaj_nieruchomosci', '$lokalizacja', '$min_rozmiar', '$liczba_pokoi', '$max_cena')";
$pdo->exec($sql);

header('Location: ../client_panel.php');