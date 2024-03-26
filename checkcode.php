<script src="cookie.js">
    onload = "submit()"
</script>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "POST SET";
    echo "<script>submit('" . $_POST["name"] . "');</script>";
} else {
    echo "POST NOT SET";
}

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

$servername ="IP-address";
$username ="Username";
$password = "Password";
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
    echo "<script>setCookie('" . $_POST["name"] . "', '" . $_POST["code"] . "');</script>";
} else {
    mysqli_close($conn);
    die("room does not exist");
}

mysqli_close($conn);
?>