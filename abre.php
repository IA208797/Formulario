<?php
$servername = "localhost";
$database = "negocio";
$username = "root";
$password = "";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    echo "No conectatres";
}
echo "Conectatres";
?>