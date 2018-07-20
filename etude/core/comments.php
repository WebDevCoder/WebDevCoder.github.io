<?php
require "db.php";
?>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "etude";

function connect1(){
    $conn1 = mysqli_connect("localhost", "root", "", "etude");
    // Check connection
    if (!$conn1) {
        die("Connection failed: " . mysqli_connect_error());
    }
    mysqli_set_charset($conn1, "utf8");
    return $conn1;
}

if(isset($_POST['nickname'], $_POST['comment'])){
    $nickname = $_POST['nickname'];
    $comment = $_POST['comment'];
    $conn1 = connect1();
    $result1 = mysqli_query($conn1, "INSERT INTO reviews (nickname, comment) VALUES ('$nickname','$comment')");
    if ($result == true){
        echo json_encode(array('nickname' => $nickname, 'comment' => $comment));
    }
}
?>