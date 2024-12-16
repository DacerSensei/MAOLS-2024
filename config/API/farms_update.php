<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["id"])) {
    $id = intval($input["id"]);
    $query = "UPDATE farms SET ";
    $params = [];

    if (isset($input["farm_name"])) {
        $query .= "farm_name = :farm_name, ";
        $params[":farm_name"] = htmlspecialchars($input["farm_name"]);
    }
    if (isset($input["farm_address"])) {
        $query .= "farm_address = :farm_address, ";
        $params[":farm_address"] = htmlspecialchars($input["farm_address"]);
    }
    if (isset($input["farm_permit"])) {
        $query .= "farm_permit = :farm_permit, ";
        $params[":farm_permit"] = htmlspecialchars($input["farm_permit"]);
    }
    if (isset($input["geolocation"])) {
        $query .= "geolocation = :geolocation, ";
        $params[":geolocation"] = htmlspecialchars($input["geolocation"]);
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
        echo json_encode(["success" => false, "message" => "Failed to update"]);
    }
} else {
    echo json_encode(["success" => false, "message" => "ID is required"]);
}
