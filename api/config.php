<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$host = 'localhost';
$db = 'bitpost';
$user = 'root';
$pass = '';

//echo "Inizio del test<br>";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connessione riuscita!";
} catch (PDOException $e) {
    die("Errore di connessione: " . $e->getMessage());
}
?>