<script src="cookie.js"> onload="submit()" </script>
<?php
var_dump($_POST);
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "POST SET";
    echo "<script>submit('" . $_POST["name"] . "', '" . $_POST["code"] . "');</script>";
} else {
    echo "POST NOT SET"; }




    // if (!isset($_POST["name"])) {
    //     echo("Name is empty");
    // }
    // if (!filter_input(INPUT_POST, "code", FILTER_VALIDATE_INT)) {
    //     echo("Code is empty");
    // }
    // $name = $_POST["name"];
    // $code = filter_input(INPUT_POST, "code", FILTER_VALIDATE_INT);
    // //Create connection

    // $conn = mysqli_connect($servername, $username, $password, $database);

    // // Check connection

    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }


    // $result = $conn->execute_query("SELECT id FROM mytable WHERE code = ? LIMIT 1", [$code]);
    // if ($result->num_rows == 1) {
    //     // found
    // } else {
    //     die("room does not exist");
    // }

    // mysqli_close($conn);
?>