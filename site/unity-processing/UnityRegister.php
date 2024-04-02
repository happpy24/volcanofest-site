<?php
    $conn = mysqli_connect('145.89.192.46', 'upg-site', 'QuiteInsaneGamingMoment', 'Lobby');

    if(mysqli_connect_errno())
    {
        echo '1 Connection Failed'; 
        exit();
    }
    $lobbycode = mt_rand(1000, 9999)
    $codecheckquery = "SELECT Code from Rooms WHERE Code='" . $lobbycode . "';";
    $codecheck = mysqli_query($conn, $codecheckquery) or die('2')
    $insertcodequery = "INSERT INTO Rooms";
    mysqli_query($conn, $insertcodequery) or die('3 Insert Code Query Failed');
    echo($lobbycode);
?>