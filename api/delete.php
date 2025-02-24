<?php
header('Content-type: application/json');
require('config.php');

$data = json_decode(file_get_contents('php://input'), true);
$id = $data['id'] ?? 0;

//controlliamo se l'id è valido

if(empty($id) || $id <= 0){
    echo json_encode(array('success'=> false,'error'=> 'ID non valido'));
    exit;
}

try {
    $stmt = $pdo->prepare('DELETE FROM posts WHERE id = ?');
    $stmt->execute([$id]);
    if ($stmt->rowCount() > 0) {
        echo json_encode(array('success' => true, 'id' => $id));
    } else {
        echo json_encode(array('success' => false, 'error' => 'Nessun post trovato con questo ID'));
    }

} catch (PDOException $e) {    
    echo json_encode(array('success'=> false,'error'=> 'Errore durante l\'eliminazione' . $e->getMessage()));
}

?>