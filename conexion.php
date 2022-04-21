<?php
class Cconexion{
function ConexionBD(){
$servername = 'localhost';
$database = 'example';
$username = 'ROOT';
$password = 'LJHR06';

$mysqli = new mysqli("localhost", $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
}
}
?>