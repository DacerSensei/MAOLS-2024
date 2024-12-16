<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

$query = "SELECT livestocks.*, livestock_type.type_name, livestock_type.icon 
FROM livestocks 
LEFT JOIN livestock_type ON livestock_type.type_id = livestocks.type
LEFT JOIN farms ON farms.farm_id = livestocks.farm_id
LEFT JOIN users ON users.id = farms.id WHERE users.status = 'active'";
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
