<?php
// Configuration de connexion à la base de données

$host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'gestion_litiges_bagages';

try {
    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    
    // Vérifier la connexion
    if ($conn->connect_error) {
        die('Erreur de connexion: ' . $conn->connect_error);
    }
    
    // Définir le charset UTF-8
    $conn->set_charset('utf8mb4');
    
} catch (Exception $e) {
    die('Erreur: ' . $e->getMessage());
}
?>