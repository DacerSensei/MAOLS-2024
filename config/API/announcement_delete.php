<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["id"])) {
    $id = intval($input["id"]);
    $query = "DELETE announcements WHERE id = :id";

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":id", $id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to delete"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "ID is required"]);
}