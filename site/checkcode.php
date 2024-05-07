<script type="text/javascript" src="cookie.js">
    onload = "submit()"
</script>

<?php
//setting local storage
echo "<script type='text/javascript' src='cookie.js'></script>";
echo "<script type='text/javascript'>submit('" . $_POST["name"] . "');</script>";

//checking if all fields are set
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

// login info database
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

// Prepare and bind the statement
$stmt = $conn->prepare("SELECT Code FROM Rooms WHERE code = ? LIMIT 1");
$stmt->bind_param("i", $code);
$stmt->execute();
$stmt->store_result();

//check is room exists in DataBase and act accordingly
if ($stmt->num_rows == 1) {
    try {
        $result = $conn->execute_query("SELECT dockerPort FROM Rooms WHERE code = [$code] LIMIT 1");
        
    } catch (Error $th) {
        echo $th;
    }
    echo "correct";
    // echo "<script type='text/javascript' src='cookie.js'></script>";
    // echo "<script type='text/javascript'>setCookie('" . $_POST["name"] . "', '" . $_POST["code"] . "', '" . [$result] ."');</script>";
} else {
    mysqli_close($conn);
    echo "wrong";
    // echo "<script type='text/javascript' src='cookie.js'></script>";
    // echo "<script type='text/javascript'>fail();</script>";
    exit();
}

//close connection
mysqli_close($conn);
?>
