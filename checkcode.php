<?php
if (!isset($_POST["name"])) {
    echo ("Name is empty");
}
if (!filter_input(INPUT_POST, "code", FILTER_VALIDATE_INT)) {
    echo ("Code is empty");
}
$name = $_POST["name"];
$code = filter_input(INPUT_POST, "code", FILTER_VALIDATE_INT);

$str = file_get_contents('/var/www/db.json');
$json = json_decode($str, true); // decode the JSON into an associative array

$servername = $json['IP-address'];
$username = $json['Username'];
$password = $json['Password'];
$database = "Lobby";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
    mysqli_close($conn);
    die ("connection error");
}


$result = $conn->execute_query("SELECT Code FROM Rooms WHERE code = ? LIMIT 1", [$code]);
if ($result->num_rows == 1) {
    echo "<script type='text/javascript' src='cookie.js'>setCookie('" . $_POST["name"] . "', '" . $_POST["code"] . "');</script>";
} else {
    mysqli_close($conn);
    header("Location: /index.php");
    die("room does not exist");
}

mysqli_close($conn);
?>