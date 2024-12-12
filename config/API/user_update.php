<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["id"])) {
    $id = intval($input["id"]);
    $query = "UPDATE users SET ";
    $params = [];

    if (isset($input["first_name"])) {
        $query .= "first_name = :first_name, ";
        $params[":first_name"] = htmlspecialchars($input["first_name"]);
    }
    if (isset($input["last_name"])) {
        $query .= "last_name = :last_name, ";
        $params[":last_name"] = htmlspecialchars($input["last_name"]);
    }
    if (isset($input["middle_name"])) {
        $query .= "middle_name = :middle_name, ";
        $params[":middle_name"] = htmlspecialchars($input["middle_name"]);
    }
    if (isset($input["address"])) {
        $query .= "address = :address, ";
        $params[":address"] = htmlspecialchars($input["address"]);
    }
    if (isset($input["contact"])) {
        $query .= "contact = :contact, ";
        $params[":contact"] = htmlspecialchars($input["contact"]);
    }
    if (isset($input["email"])) {
        $query .= "email = :email, ";
        $params[":email"] = filter_var($input["email"], FILTER_SANITIZE_EMAIL);
    }
    if (isset($input["password"])) {
        $query .= "password = :password, ";
        $params[":password"] = htmlspecialchars($input["password"]);
    }
    if (isset($input["type"])) {
        $query .= "type = :type, ";
        $params[":type"] = htmlspecialchars($input["type"]);
    }
    if (isset($input["status"])) {
        $query .= "status = :status, ";
        $params[":status"] = htmlspecialchars($input["status"]);
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
        echo json_encode(["success" => false, "message" => "Failed to update user" . " " . $query]);
    }
} else {
    echo json_encode(["success" => false, "message" => "User ID is required"]);
}
