<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

$query = "SELECT * FROM users WHERE status = 'active' ORDER BY timestamp DESC";
$stmt = $pdo->prepare($query);

if ($stmt->execute()) {
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode([
        "success" => true,
        "data" => $users
    ]);
} else {
    echo json_encode([
        "success" => false,
        "message" => "Failed to fetch users"
    ]);
}
