<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "part_clicker_DB";

    // Create connection
    $DBcon = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$DBcon) {
      die("Connection failed: " . mysqli_connect_error());
    }
?>
