<?php
include ('../DataBaseConnection.php');

$rodzaj_nieruchomosci = $_POST['rodzaj_nieruchomosci'];
$lokalizacja = $_POST['lokalizacja'];
$rozmiar = $_POST['rozmiar'];
$liczba_pokoi = $_POST['liczba_pokoi'];
$cena = $_POST['cena'];
$klimatyzacja = $_POST['klimatyzacja'];
$balkon = $_POST['balkon'];
$piwnica = $_POST['piwnica'];
$garaz = $_POST['garaz'];
$winda = $_POST['winda'];
$strzezone = $_POST['strzezone'];
$do_remontu = $_POST['do_remontu'];
$dla_niepelnosprawnych = $_POST['dla_niepelnosprawnych'];

$id_oferty = $pdo->query("SELECT * FROM oferty ORDER BY id_oferty DESC LIMIT 1");
$id_oferty = $id_oferty->fetch();
$id_oferty = $id_oferty['id_oferty'];

if($id_oferty == null)
{
    $id_oferty = 1;
}else {
    $id_oferty = $id_oferty+1;
}

$sql1 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'klimatyzacja', '$klimatyzacja')";
$pdo->exec($sql1);
$sql2 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'balkon', '$balkon')";
$pdo->exec($sql2);
$sql3 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'piwnica', '$piwnica')";
$pdo->exec($sql3);
$sql4 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'garaz', '$garaz')";
$pdo->exec($sql4);
$sql5 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'winda', '$winda')";
$pdo->exec($sql5);
$sql6 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'strzezone', '$strzezone')";
$pdo->exec($sql6);
$sql7 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'do_remontu', '$do_remontu')";
$pdo->exec($sql7);
$sql8 = "INSERT INTO walory(id_oferty, nazwa_waloru, status_waloru) VALUES ('$id_oferty', 'dla_niepelnosprawnych', '$dla_niepelnosprawnych')";
$pdo->exec($sql8);

$sql = "INSERT INTO oferty(rodzaj_nieruchomosci, lokalizacja, rozmiar, liczba_pokoi, cena)
 VALUES ('$rodzaj_nieruchomosci', '$lokalizacja', '$rozmiar', '$liczba_pokoi', '$cena')";
$pdo->exec($sql);

header('Location: ../client_panel.php');