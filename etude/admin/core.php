<?php
$action = $_POST['action'];
require_once 'function.php';

switch ($action){
    case 'initCommutation':
        initCommutation();
        break;
    case 'SelectOneCommutation':
        SelectOneCommutation();
        break;
    case 'updateCommutation':
        updateCommutation();
        break;
    case 'newCommutation':
        newCommutation();
        break;
    case 'loadCommutation':
        loadCommutation();
        break;
        //ударные
    case 'initDrums':
        initDrums();
        break;
    case 'SelectOneDrums':
        SelectOneDrums();
        break;
    case 'updateDrums':
        updateDrums();
        break;
    case 'newDrums':
        newDrums();
        break;
    case 'loadDrums':
        loadDrums();
        break;
        //гитары
    case 'initGuitars':
        initGuitars();
        break;
    case 'initHeadphones':
        initHeadphones();
        break;
    case 'initMicrophone':
        initMicrophone();
        break;
    case 'initNewProdIndex':
        initNewProdIndex();
        break;
    case 'initPiano':
        initPiano();
        break;
    case 'initSoundEquip':
        initSoundEquip();
        break;

    ///////////вывод продукта в карточку товара
    case 'loadSingleCommutation':
        loadSingleCommutation();
        break;
    case 'loadSingleDrums':
        loadSingleDrums();
        break;
}