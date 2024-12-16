<?php
require "../Database.php";

$input = json_decode(file_get_contents("php://input"), true);

if (isset($input["id"])) {
    $id = intval($input["id"]);
    $query = "UPDATE schedules SET ";
    $params = [];

    if (isset($input["type"])) {
        $query .= "type = :type, ";
        $params[":type"] = htmlspecialchars($input["type"]);
    }
    if (isset($input["description"])) {
        $query .= "description = :description, ";
        $params[":description"] = htmlspecialchars($input["description"]);
    }
    if (isset($input["status"])) {
        $query .= "status = :status, ";
        $params[":status"] = htmlspecialchars($input["status"]);
    }
    if (isset($input["schedule_date_time"])) {
        $query .= "schedule_date_time = :schedule_date_time, ";
        $params[":schedule_date_time"] = htmlspecialchars($input["schedule_date_time"]);
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
