<?php

$json = file_get_contents('../data/new-product-index.json');
$json = json_decode($json, true);
$json1 = file_get_contents('../data/guitars.json');
$json1 = json_decode($json1, true);
$json2 = file_get_contents('../data/piano.json');
$json2 = json_decode($json2, true);
$json3 = file_get_contents('../data/drums.json');
$json3 = json_decode($json3, true);
$json4 = file_get_contents('../data/soundequip.json');
$json4 = json_decode($json4, true);
$json5 = file_get_contents('../data/commutation.json');
$json5 = json_decode($json5, true);
$json6 = file_get_contents('../data/microphone.json');
$json6 = json_decode($json6, true);
$json7 = file_get_contents('../data/microphone.json');
$json7 = json_decode($json7, true);

//письмо
$message = '';
$message .='<h1>Заказ из магазина</h1>';
$message .='<p>Телефон: '.$_POST['ephone'].'</p>';
$message .='<p>Почта: '.$_POST['email'].'</p>';
$message .='<p>Клиент: '.$_POST['ename'].'</p>';

$cart = $_POST['cart'];
$sum = 0;

if (empty($cart)){$message .=$sum;} else {
    foreach ($cart as $id => $count){
        $message .=$json[$id]['name'].'  ';
        $message .=$count.'шт.'.'  ';
        $message .=$count*$json[$id]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum +$count*$json[$id]['cost'].'руб';
        $message .='<br>';
    }
}

$cart1 = $_POST['cartGuitar'];
$sum1 = 0;

if (empty($cart1)){$message .=$sum1;} else {
    foreach ($cart1 as $id1 => $count1){
        $message .=$json1[$id1]['name'].'  ';
        $message .=$count1.'шт.'.'  ';
        $message .=$count1*$json1[$id1]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum1 +$count1*$json1[$id1]['cost'].'руб';
        $message .='<br>';
    }
}

$cart2 = $_POST['cartPiano'];
$sum2 = 0;

if (empty($cart2)){$message .=$sum2;} else {
    foreach ($cart2 as $id2 => $count2){
        $message .=$json2[$id2]['name'].'  ';
        $message .=$count2.'шт.'.'  ';
        $message .=$count2*$json2[$id2]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum2 +$count2*$json2[$id2]['cost'].'руб';
        $message .='<br>';
    }
}

$cart3 = $_POST['cartDrums'];
$sum3 = 0;

if (empty($cart3)){$message .=$sum3;} else {
    foreach ($cart3 as $id3 => $count3){
        $message .=$json3[$id3]['name'].'  ';
        $message .=$count3.'шт.'.'  ';
        $message .=$count3*$json3[$id3]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum3 +$count3*$json3[$id3]['cost'].'руб';
        $message .='<br>';
    }
}

$cart4 = $_POST['cartSound'];
$sum4 = 0;

if (empty($cart3)){$message .=$sum4;} else {
    foreach ($cart4 as $id4 => $count4){
        $message .=$json4[$id4]['name'].'  ';
        $message .=$count4.'шт.'.'  ';
        $message .=$count4*$json4[$id4]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum4 +$count4*$json4[$id4]['cost'].'руб';
        $message .='<br>';
    }
}

$cart5 = $_POST['cartCommutation'];
$sum5 = 0;

if (empty($cart5)){$message .=$sum5;} else {
    foreach ($cart5 as $id5 => $count5){
        $message .=$json5[$id5]['name'].'  ';
        $message .=$count5.'шт.'.'  ';
        $message .=$count5*$json5[$id5]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum5 +$count5*$json5[$id5]['cost'].'руб';
        $message .='<br>';
    }
}

$cart6 = $_POST['cartMicrophone'];
$sum6 = 0;

if (empty($cart6)){$message .=$sum6;} else {
    foreach ($cart6 as $id6 => $count6){
        $message .=$json6[$id6]['name'].'  ';
        $message .=$count6.'шт.'.'  ';
        $message .=$count6*$json6[$id6]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum6 +$count6*$json6[$id6]['cost'].'руб';
        $message .='<br>';
    }
}

$cart7 = $_POST['cartHeadphones'];
$sum7 = 0;

if (empty($cart7)){$message .=$sum7;} else {
    foreach ($cart7 as $id7 => $count7){
        $message .=$json7[$id7]['name'].'  ';
        $message .=$count7.'шт.'.'  ';
        $message .=$count7*$json7[$id7]['cost'].'руб';
        $message .='<br>';
        $message .='Всего:  ';
        $message .=$sum7 +$count7*$json7[$id7]['cost'].'руб';
        $message .='<br>';
    }
}


$to = 'webdevcoder@mail.ru'.',';
$to .=$_POST['email'];
$spectext = '<!DOCTYPE html><html><head><title>Заказ</title></head><body>';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$m = mail($to, 'Заказ в магазине', $spectext.$message.'</body></html>', $headers);

if($m) {echo 1;} else {echo 0;}

