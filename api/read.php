<?php

//impostiamo un header che comnica al client che la risposta sarà in formato json
header('Content-Type: application/json' );
require 'config.php';

//Query per la selezione di tutti i post
$stmt = $pdo->query("SELECT id, title, LEFT(content, 100) AS excerpt, created_at FROM posts ORDER BY created_at DESC");

//recupera i risultati
$posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

//Controlliamo se ci sono post
if(empty($posts)) {
    echo json_encode(['message' => 'Non ci sono post']);
} else {
    echo json_encode( $posts );
}


?>