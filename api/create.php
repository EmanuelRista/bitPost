<?php 
header('Content-Type: application/json');
require 'config.php';

//Recuperiamo i dati inviati tramite POST
$data = json_decode(file_get_contents('php://input'), true);
//php://input da accesso al corpo gresso della richeista POST, cioè tutto quello che è stato mandato al server
//file_get_contents() è una funzione che legge quel corpo grezzo e lo trasforma in una stringa
//json_decode prende la stringa JSON e la trasforma in un array o un oggetto, in modo che PHP la possa "capire"
$title = $data['title'] ?? '';    // Se 'title' non esiste in $data, usa una stringa vuota
$content = $data['content'] ?? ''; // Se 'content' non esiste in $data, usa una stringa vuota

//Controlliamo che i dati siano validi (validazione)
if(empty($title) || empty($content)) {    
    echo json_encode(['success' => false, 'error' => 'Titolo e contenuto sono obbligatori']);
    exit;
} 

try {
    $stmt = $pdo->prepare('INSERT INTO posts (title, content) VALUES (?, ?)'); //tramite PDO diamo istruzioni al database per inserire nella tabella posts due dati nelle colonne title e content. ? è un segnaposto, "i valori te li manderò in allegato". stmt è il biglietto di istruzioni
    $stmt->execute([$title, $content]); //invia il biglietto al database insieme ai valori veri
    echo json_encode(['success' => true, 'id' => $pdo->lastInsertId()]); //Se tutto va in porto ecco l'id del nuovo post
} catch (PDOException $e) {       
    echo json_encode(['success' => false, 'error' => 'Errore durante l\'inserimento: ' . $e->getMessage()]); //se qualcosa va storto ecco l'errore
}
?>