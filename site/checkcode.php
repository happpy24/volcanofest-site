<script type="text/javascript" src="cookie.js">
    onload = "submit()"
</script>

<?php
echo "<script type='text/javascript' src='cookie.js'></script>";
echo "<script type='text/javascript'>submit('" . $_POST["name"] . "');</script>";


if (!isset($_POST["name"]) || empty($_POST["name"])) {
    echo ("Name is empty");
    exit;
}
if (!isset($_POST["code"]) || empty($_POST["code"]) || !filter_var($_POST["code"], FILTER_VALIDATE_INT)) {
    echo ("Code is empty or invalid");
    exit;
}

$name = $_POST["name"];
$code = $_POST["code"];

$str = file_get_contents('/var/www/db.json');
$json = json_decode($str, true); // decode the JSON into an associative array

$servername = $json['IP-address'];
$username = $json['Username'];
$password = $json['Password'];
$database = "Lobby";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    mysqli_close($conn);
    die ("connection error");
}

//select the dockerPort
$port = ("SELECT dockerPort FROM Rooms WHERE code = ? LIMIT 1");

// Prepare and bind the statement
$stmt = $conn->prepare($port);
$stmt->bind_param("i", $code);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows == 1) {
    echo "<script type='text/javascript' src='cookie.js'></script>";
    echo "<script type='text/javascript'>setCookie('" . $_POST["name"] . "','" . $stmt . "');</script>";
} else {
    mysqli_close($conn);
    header("Location: .");
    exit();
}

mysqli_close($conn);
?>
