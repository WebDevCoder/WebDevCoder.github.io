<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etude";

function connect(){
    $conn = mysqli_connect("localhost", "root", "", "etude");
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn, "utf8");
    return $conn;
}


//коммутация

function initCommutation(){
    $conn = connect();
    $sql = "SELECT id, name FROM commutation";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function SelectOneCommutation(){
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT * FROM commutation WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function updateCommutation(){
    $conn = connect();
    $id = $_POST['id'];
    $name = $_POST['gname'];
    $articul = $_POST['garticul'];
    $tradeMark = $_POST['gtradeMark'];
    $seria3 = $_POST['gseria3'];
    $cost = $_POST['gcost'];
    $nalichie = $_POST['gnalichie'];
    $mainPhoto1 = $_POST['gmainPhoto1'];
    $mainPhoto2 = $_POST['gmainPhoto2'];
    $popupPhoto1 = $_POST['gpopupPhoto1'];
    $popupPhoto2 = $_POST['gpopupPhoto2'];
    $character1Key = $_POST['gcharacter1Key'];
    $character1Info = $_POST['gcharacter1Info'];
    $character2Key = $_POST['gcharacter2Key'];
    $character2Info = $_POST['gcharacter2Info'];
    $character3Key = $_POST['gcharacter3Key'];
    $character3Info = $_POST['gcharacter3Info'];
    $character4Key = $_POST['gcharacter4Key'];
    $character4Info = $_POST['gcharacter4Info'];
    $brendPhoto = $_POST['gbrendPhoto'];
    $aboutBrend = $_POST['gaboutBrend'];
    $brendTitle1 = $_POST['gbrendTitle1'];
    $brendText1 = $_POST['gbrendText1'];
    $brendText2 = $_POST['gbrendText2'];
    $brendTitle2 = $_POST['gbrendTitle2'];
    $brendText3 = $_POST['gbrendText3'];
    $brendText4 = $_POST['gbrendText4'];
    $shortdescr = $_POST['gshortdescr'];

    $sql = "UPDATE commutation SET name = '$name', articul = '$articul', tradeMark = '$tradeMark', seria3 = '$seria3', cost = '$cost', nalichie = '$nalichie', mainPhoto1 = '$mainPhoto1', mainPhoto2 = '$mainPhoto2', popupPhoto1 = '$popupPhoto1', popupPhoto2 = '$popupPhoto2', 
    character1Key = '$character1Key', character1Info = '$character1Info', character2Key = '$character2Key', character2Info = '$character2Info', character3Key = '$character3Key', character3Info = '$character3Info', character4Key = '$character4Key', character4Info = '$character4Info',
    brendPhoto = '$brendPhoto', aboutBrend = '$aboutBrend', brendTitle1 = '$brendTitle1', brendText1 = '$brendText1', brendText2 = '$brendText2', brendTitle2 = '$brendTitle2', brendText3 = '$brendText3', brendText4 = '$brendText4', shortdescr = '$shortdescr' WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    writeJSONCommutation();
}

function newCommutation(){
    $conn = connect();
    $name = $_POST['gname'];
    $articul = $_POST['garticul'];
    $tradeMark = $_POST['gtradeMark'];
    $seria3 = $_POST['gseria3'];
    $cost = $_POST['gcost'];
    $nalichie = $_POST['gnalichie'];
    $mainPhoto1 = $_POST['gmainPhoto1'];
    $mainPhoto2 = $_POST['gmainPhoto2'];
    $popupPhoto1 = $_POST['gpopupPhoto1'];
    $popupPhoto2 = $_POST['gpopupPhoto2'];
    $character1Key = $_POST['gcharacter1Key'];
    $character1Info = $_POST['gcharacter1Info'];
    $character2Key = $_POST['gcharacter2Key'];
    $character2Info = $_POST['gcharacter2Info'];
    $character3Key = $_POST['gcharacter3Key'];
    $character3Info = $_POST['gcharacter3Info'];
    $character4Key = $_POST['gcharacter4Key'];
    $character4Info = $_POST['gcharacter4Info'];
    $brendPhoto = $_POST['gbrendPhoto'];
    $aboutBrend = $_POST['gaboutBrend'];
    $brendTitle1 = $_POST['gbrendTitle1'];
    $brendText1 = $_POST['gbrendText1'];
    $brendText2 = $_POST['gbrendText2'];
    $brendTitle2 = $_POST['gbrendTitle2'];
    $brendText3 = $_POST['gbrendText3'];
    $brendText4 = $_POST['gbrendText4'];
    $shortdescr = $_POST['gshortdescr'];

    $sql = "INSERT INTO commutation (name, articul, tradeMark, seria3, cost, nalichie, mainPhoto1, mainPhoto2, popupPhoto1, popupPhoto2, character1Key, character1Info, character2Key, character2Info, character3Key, character3Info, character4Key, character4Info,
        brendPhoto, aboutBrend, brendTitle1, brendText1, brendText2, brendTitle2, brendText3, brendText4, shortdescr)
VALUES ('$name', '$articul', '$tradeMark', '$seria3', '$cost', '$nalichie', '$mainPhoto1', '$mainPhoto2', '$popupPhoto1', '$popupPhoto2', '$character1Key', '$character1Info', '$character2Key', '$character2Info', '$character3Key', '$character3Info', '$character4Key', '$character4Info',
        '$brendPhoto', '$aboutBrend', '$brendTitle1', '$brendText1', '$brendText2', '$brendTitle2', '$brendText3', '$brendText4', '$shortdescr')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    writeJSONCommutation();
}

function writeJSONCommutation(){
    $conn = connect();
    $sql = "SELECT * FROM commutation";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        file_put_contents('../data/commutation.json', json_encode($out));
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadCommutation(){
    $conn = connect();
    $sql = "SELECT * FROM commutation";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadSingleCommutation(){
    $id = $_POST['id'];
    $conn = connect();
    $sql = "SELECT * FROM commutation WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

//ударные

function initDrums(){
    $conn = connect();
    $sql = "SELECT id, name FROM drums";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function SelectOneDrums(){
    $conn = connect();
    $id = $_POST['gid'];
    $sql = "SELECT * FROM drums WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function updateDrums(){
    $conn = connect();
    $id = $_POST['id'];
    $name = $_POST['gname'];
    $articul = $_POST['garticul'];
    $tradeMark = $_POST['gtradeMark'];
    $seria3 = $_POST['gseria3'];
    $cost = $_POST['gcost'];
    $nalichie = $_POST['gnalichie'];
    $mainPhoto1 = $_POST['gmainPhoto1'];
    $mainPhoto2 = $_POST['gmainPhoto2'];
    $popupPhoto1 = $_POST['gpopupPhoto1'];
    $popupPhoto2 = $_POST['gpopupPhoto2'];
    $character1Key = $_POST['gcharacter1Key'];
    $character1Info = $_POST['gcharacter1Info'];
    $character2Key = $_POST['gcharacter2Key'];
    $character2Info = $_POST['gcharacter2Info'];
    $character3Key = $_POST['gcharacter3Key'];
    $character3Info = $_POST['gcharacter3Info'];
    $character4Key = $_POST['gcharacter4Key'];
    $character4Info = $_POST['gcharacter4Info'];
    $brendPhoto = $_POST['gbrendPhoto'];
    $aboutBrend = $_POST['gaboutBrend'];
    $brendTitle1 = $_POST['gbrendTitle1'];
    $brendText1 = $_POST['gbrendText1'];
    $brendText2 = $_POST['gbrendText2'];
    $brendTitle2 = $_POST['gbrendTitle2'];
    $brendText3 = $_POST['gbrendText3'];
    $brendText4 = $_POST['gbrendText4'];
    $shortdescr = $_POST['gshortdescr'];

    $sql = "UPDATE drums SET name = '$name', articul = '$articul', tradeMark = '$tradeMark', seria3 = '$seria3', cost = '$cost', nalichie = '$nalichie', mainPhoto1 = '$mainPhoto1', mainPhoto2 = '$mainPhoto2', popupPhoto1 = '$popupPhoto1', popupPhoto2 = '$popupPhoto2', 
    character1Key = '$character1Key', character1Info = '$character1Info', character2Key = '$character2Key', character2Info = '$character2Info', character3Key = '$character3Key', character3Info = '$character3Info', character4Key = '$character4Key', character4Info = '$character4Info',
    brendPhoto = '$brendPhoto', aboutBrend = '$aboutBrend', brendTitle1 = '$brendTitle1', brendText1 = '$brendText1', brendText2 = '$brendText2', brendTitle2 = '$brendTitle2', brendText3 = '$brendText3', brendText4 = '$brendText4', shortdescr = '$shortdescr' WHERE id='$id' ";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    mysqli_close($conn);
    writeJSONDrums();
}

function newDrums(){
    $conn = connect();
    $name = $_POST['gname'];
    $articul = $_POST['garticul'];
    $tradeMark = $_POST['gtradeMark'];
    $seria3 = $_POST['gseria3'];
    $cost = $_POST['gcost'];
    $nalichie = $_POST['gnalichie'];
    $mainPhoto1 = $_POST['gmainPhoto1'];
    $mainPhoto2 = $_POST['gmainPhoto2'];
    $popupPhoto1 = $_POST['gpopupPhoto1'];
    $popupPhoto2 = $_POST['gpopupPhoto2'];
    $character1Key = $_POST['gcharacter1Key'];
    $character1Info = $_POST['gcharacter1Info'];
    $character2Key = $_POST['gcharacter2Key'];
    $character2Info = $_POST['gcharacter2Info'];
    $character3Key = $_POST['gcharacter3Key'];
    $character3Info = $_POST['gcharacter3Info'];
    $character4Key = $_POST['gcharacter4Key'];
    $character4Info = $_POST['gcharacter4Info'];
    $brendPhoto = $_POST['gbrendPhoto'];
    $aboutBrend = $_POST['gaboutBrend'];
    $brendTitle1 = $_POST['gbrendTitle1'];
    $brendText1 = $_POST['gbrendText1'];
    $brendText2 = $_POST['gbrendText2'];
    $brendTitle2 = $_POST['gbrendTitle2'];
    $brendText3 = $_POST['gbrendText3'];
    $brendText4 = $_POST['gbrendText4'];
    $shortdescr = $_POST['gshortdescr'];

    $sql = "INSERT INTO drums (name, articul, tradeMark, seria3, cost, nalichie, mainPhoto1, mainPhoto2, popupPhoto1, popupPhoto2, character1Key, character1Info, character2Key, character2Info, character3Key, character3Info, character4Key, character4Info,
        brendPhoto, aboutBrend, brendTitle1, brendText1, brendText2, brendTitle2, brendText3, brendText4, shortdescr)
VALUES ('$name', '$articul', '$tradeMark', '$seria3', '$cost', '$nalichie', '$mainPhoto1', '$mainPhoto2', '$popupPhoto1', '$popupPhoto2', '$character1Key', '$character1Info', '$character2Key', '$character2Info', '$character3Key', '$character3Info', '$character4Key', '$character4Info',
        '$brendPhoto', '$aboutBrend', '$brendTitle1', '$brendText1', '$brendText2', '$brendTitle2', '$brendText3', '$brendText4', '$shortdescr')";

    if (mysqli_query($conn, $sql)) {
        echo "1";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    writeJSONDrums();
}

function writeJSONDrums(){
    $conn = connect();
    $sql = "SELECT * FROM drums";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        file_put_contents('../data/drums.json', json_encode($out));
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadDrums(){
    $conn = connect();
    $sql = "SELECT * FROM drums";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function loadSingleDrums(){
    $id = $_POST['id'];
    $conn = connect();
    $sql = "SELECT * FROM drums WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo json_encode($row);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

//гитары


function initGuitars(){
    $conn = connect();
    $sql = "SELECT id, name FROM guitars";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initHeadphones(){
    $conn = connect();
    $sql = "SELECT id, name FROM headphones";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initMicrophone(){
    $conn = connect();
    $sql = "SELECT id, name FROM microphone";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initNewProdIndex(){
    $conn = connect();
    $sql = "SELECT id, name FROM NewProductIndex";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initPiano(){
    $conn = connect();
    $sql = "SELECT id, name FROM piano";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}

function initSoundEquip(){
    $conn = connect();
    $sql = "SELECT id, name FROM soundequip";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $out = array();
        while($row = mysqli_fetch_assoc($result)) {
            $out[$row["id"]] = $row;
        }
        echo json_encode($out);
    } else {
        echo "0";
    }
    mysqli_close($conn);
}