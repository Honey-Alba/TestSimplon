<?php
$serverName = "localhost"; 
$DBUsername = "root";
$DBPassword = "";
$DBName = "simplon";

try {
    $connex = new PDO("mysql:host=$serverName;dbname=$DBName", $DBUsername, $DBPassword);
    $connex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "la connexion a echoué:" . $e->getMessage();
}
?>