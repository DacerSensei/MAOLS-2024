<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["id"])) {
    $id = intval($input["id"]);
    $query = "UPDATE announcements SET ";
    $params = [];

    if (isset($input["title"])) {
        $query .= "title = :title, ";
        $params[":title"] = htmlspecialchars($input["title"]);
    }
    if (isset($input["body"])) {
        $query .= "body = :body, ";
        $params[":body"] = htmlspecialchars($input["body"]);
    }
    if (isset($input["description"])) {
        $query .= "description = :description, ";
        $params[":description"] = htmlspecialchars($input["description"]);
    }
    
    if (empty($params)) {
        echo json_encode(["success" => false, "message" => "No valid fields to update"]);
        exit;
    }

    $query = rtrim($query, ", ");
    $query .= " WHERE id = :id";
    $params[":id"] = $id;

    $stmt = $pdo->prepare($query);
    foreach ($params as $param => &$value) {
        $stmt->bindParam($param, $value);
    }

    if ($stmt->execute()) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to update"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "ID is required"]);
}
