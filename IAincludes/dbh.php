<?php
$dBservername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "loginsystem";
$conn = mysqli_connect($dBservername, $dBUsername, $dBPassword, $dBName);
if (!conn) {
    die ("Connection Failed: " . mysqli_connect_error());
    echo "dead";
}
?>
