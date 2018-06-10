<?php

$json = file_get_contents('../data/new-product-index.json');
$json = json_decode($json, true);
$json1 = file_get_contents('../data/guitars.json');
$json1 = json_decode($json1, true);
$json2 = file_get_contents('../data/piano.json');
$json2 = json_decode($json2, true);
$json3 = file_get_contents('../data/drums.json');
$json3 = json_decode($json3, true);

//письмо
$message = '';
$message .='<h1>Заказ из магазина</h1>';
$message .='<p>Телефон: '.$_POST['ephone'].'</p>';
$message .='<p>Почта: '.$_POST['email'].'</p>';
$message .='<p>Клиент: '.$_POST['ename'].'</p>';

$cart = $_POST['cart'];
$sum = 0;

foreach ($cart as $id => $count){
    $message .=$json[$id]['name'].'-';
    $message .=$count.'-';
    $message .=$count*$json[$id]['cost'];
    $message .='<br>';
    $message .=$sum +$count*$json[$id]['cost'];
}

$cart1 = $_POST['cartGuitar'];
$sum1 = 0;

if(empty($cart1)){
    $message .='Всего: ' .$sum;
}
else{foreach ($cart1 as $id1 => $count1){
    $message .=$json1[$id1]['name'].'-';
    $message .=$count1.'-';
    $message .=$count1*$json1[$id1]['cost'];
    $message .='<br>';
    $message .=$sum1 +$count1*$json1[$id1]['cost'];
}
    $message .='Всего: ' .$sum+$sum1;
;}

$cart2 = $_POST['cartPiano'];
$sum2 = 0;

if(empty($cart2)){
    $message .='Всего: ' .$sum;
}
else{foreach ($cart2 as $id2 => $count2){
    $message .=$json2[$id2]['name'].'-';
    $message .=$count2.'-';
    $message .=$count2*$json2[$id2]['cost'];
    $message .='<br>';
    $message .=$sum2 +$count2*$json2[$id2]['cost'];
}
    $message .='Всего: ' .$sum+$sum2;
;}

$cart3 = $_POST['cartDrums'];
$sum3 = 0;

if(empty($cart2)){
    $message .='Всего: ' .$sum;
}
else{foreach ($cart3 as $id3 => $count3){
    $message .=$json3[$id3]['name'].'-';
    $message .=$count3.'-';
    $message .=$count3*$json2[$id3]['cost'];
    $message .='<br>';
    $message .=$sum3 +$count3*$json3[$id3]['cost'];
}
    $message .='Всего: ' .$sum+$sum3;
;}

$to = 'webdevcoder@mail.ru'.',';
$to .=$_POST['email'];
$spectext = '<!DOCTYPE html><html><head><title>Заказ</title></head><body>';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Заказа в магазине', $spectext.$message.'</body></html>', $headers);

if($m) {echo 1;} else {echo 0;}