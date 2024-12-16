<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

$query = "INSERT INTO announcements SET ";
$params = [];

if (isset($input["title"])) {
    $query .= "title = :title, ";
    $params[":title"] = htmlspecialchars(trim($input["title"])); 
}
if (isset($input["body"])) {
    $query .= "body = :body, ";
    $params[":body"] = htmlspecialchars(trim($input["body"]));
}
if (isset($input["description"])) {
    $query .= "description = :description, ";
    $params[":description"] = htmlspecialchars(trim($input["description"]));
}

if (empty($params)) {
    echo json_encode(["success" => false, "message" => "No valid fields to insert"]);
    exit;
}

$query = rtrim($query, ", ");
$stmt = $pdo->prepare($query);

foreach ($params as $param => &$value) {
    $stmt->bindParam($param, $value);
}

if ($stmt->execute()) {
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false, "message" => "Failed to insert", "error" => $stmt->errorInfo()]);
}
?>