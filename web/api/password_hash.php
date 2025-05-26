<?php
// hash.php
header('Content-Type: application/json');

if (!isset($_POST['password'])) {
    echo json_encode(['error' => 'Kein Passwort übergeben']);
    exit;
}

$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT);

echo json_encode(['hash' => $hash]);
?>
