<?php
$servername = "localhost";
$username = "root";
$password = ""; // žiadne heslo pri XAMPP
$database = "sablona"; // presne ten názov, ktorý ste použili

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Spojenie zlyhalo: " . $conn->connect_error);
}
?>
