<?php
include '../DataBaseConnection.php';
$client_id = $_POST['client_id'];
$wymagania = $pdo->query("SELECT * FROM requirements WHERE user_id = '$client_id'");
$wymagania = $wymagania->fetchAll();
$offers = $pdo->query("SELECT * FROM offers");
$offers = $offers->fetchAll();
$check = [];
$check_client_offers = $pdo->query("SELECT * FROM clients_offers WHERE client_id = '$client_id'");
$check_client_offers = $check_client_offers->fetchAll();
foreach ($wymagania as $wymaganie) {
    foreach ($offers as $offer) {
        foreach ($check_client_offers as $cco){
            if($cco['offer_id'] != $offer['id']){
                if ($wymaganie['subject'] == $offer['subject'] && $wymaganie['min_size'] <= $offer['min_size'] && $wymaganie['min_room_number'] <= $offer['min_room_number'] && $wymaganie['max_price'] >= $offer['max_price'] && $wymaganie['localization'] == $offer['localization']) {
                    $check[] = $offer;
                }
            }
        }
    }
}
$data = [];
foreach ($check as $c){
    $data[] = '<option value="'. $c['offer_id'] .'">'. $c['subject'] . ' ' .$c['localization'] .'</option>';
}
foreach ($data as $d){
    if($d != null){
        echo $d;
    }else
    echo $d;
}