<?php
session_start();
require "config/Database.php";
if (!$_SESSION["isLoggedIn"]) {
    header('Location: login.php');
    exit;
}

$sql = "SELECT schedules.*, users.first_name, users.last_name, users.contact, users.email, farms.farm_name 
    FROM schedules LEFT JOIN users ON schedules.user_id = users.id
    LEFT JOIN farms ON farms.user_id = users.id
    WHERE DATE(schedules.schedule_date_time) = CURDATE() 
    AND schedules.status = 'approved'
    AND users.status = 'active'
    ORDER BY schedules.schedule_date_time DESC";

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["tomorrow"])) {
        $tomorrow = filter_var($_GET["tomorrow"], FILTER_VALIDATE_BOOLEAN);
        $sql = "SELECT schedules.*, users.first_name, users.last_name, users.contact, users.email, farms.farm_name 
        FROM schedules LEFT JOIN users ON schedules.user_id = users.id
        LEFT JOIN farms ON farms.user_id = users.id
        WHERE DATE(schedules.schedule_date_time) = CURDATE() + INTERVAL 1 DAY 
        AND schedules.status = 'approved'
        AND users.status = 'active'
        ORDER BY schedules.schedule_date_time DESC";
    } else if (isset($_GET["date"])) {
        $date = $_GET["date"];
        $sql = "SELECT schedules.*, users.first_name, users.last_name, users.contact, users.email, farms.farm_name 
        FROM schedules LEFT JOIN users ON schedules.user_id = users.id
        LEFT JOIN farms ON farms.user_id = users.id
        WHERE DATE(schedules.schedule_date_time) = '$date' 
        AND schedules.status = 'approved'
        AND users.status = 'active'
        ORDER BY schedules.schedule_date_time DESC";
    }
}

$stmt = $pdo->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAOLS</title>
    <link rel="icon" type="image/x-icon" href="/Assets/Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        type="text/css" />
    <link rel="stylesheet" href="/CSS/Toolkit.css">
    <link rel="stylesheet" href="/CSS/main.css">
    <link rel="stylesheet" href="/CSS/schedules.css">
</head>

<body>
    <?php require "Library/loading.php"; ?>
    <?php require "Library/header.php"; ?>
    <main id="main">
        <?php require "Library/sidebar.php"; ?>
        <section id="main-section">
            <div class="content-header">
                <section class="main-content-title">
                    <h4>Schedules</h4>
                </section>
                <section class="main-content-body">
                    <div class="schedule-section">
                        <div class="schedule-section-header">
                            <button class="Button-Green-Dark" id="today-button">Today</button>
                            <button class="Button-Default" id="tomorrow-button">Tomorrow</button>
                            <div class="Calendar-Picker-Container">
                                <button class="Button-Default-Icon Calendar-Button">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M7 11H9V13H7V11M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M19 5V7H5V5H19M5 19V9H19V19H5M11 15H13V17H11V15M15 15H17V17H15V15M15 11H17V13H15V11Z" />
                                    </svg>
                                    Select a Date
                                </button>
                                <div>
                                    <div class="Calendar-Picker-Header">
                                        <h4>SELECT DATE</h1>
                                            <p>Monday, November 17</p>
                                    </div>
                                    <div class="Calendar-Picker-Month-Container">
                                        <h4 class="Calendar-Current-Month-Year"></h4>
                                        <span>
                                            <button class="Button-Green-Dark"><</button>
                                            <button class="Button-Green-Dark">></button>
                                        </span>
                                    </div>
                                    <div class="Calendar-Picker-Body">
                                    </div>
                                </div>
                                <div>
                                </div>
                                <div></div>
                            </div>
                        </div>
                        <div class="schedule-section-body">
                            <?php
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                            ?>
                                    <div class="expander">
                                        <div class="header">
                                            <div class="title" onclick="toggleExpander(event)"><?= ucfirst($row->first_name) . " " . ucfirst($row->last_name) ?></div>
                                            <div class="arrow">▼</div>
                                        </div>
                                        <div class="content">
                                            <p>Farm name: <?= !empty($row->farm_name) ? ucfirst($row->farm_name) : "No Farm yet" ?></p>
                                            <p>Contact: <?= $row->contact ?></p>
                                            <p>Email: <?= $row->email ?></p>
                                            <p>Description: <?= $row->description ?></p>
                                            <p>Time: <?= date("g:iA", strtotime($row->schedule_date_time)) ?></p>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                if (isset($_GET["tomorrow"])) {
                                    echo "No schedule for tomorrow";
                                } else if(isset($_GET["date"])){
                                    echo "No schedule for " . $_GET["date"];
                                } else {
                                    echo "No schedule for today";
                                }
                            }
                            ?>
                        </div>
                </section>
            </div>

        </section>
    </main>
    <?php require "Library/notification.php"; ?>
    <script src="Javascript/Toolkit.js"></script>
    <script type="module" src="Javascript/main.js"></script>
    <script src="Javascript/schedules.js"></script>
</body>

</html>