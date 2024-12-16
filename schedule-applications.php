<?php
require "config/Database.php";

$sql = "SELECT schedules.*, users.first_name, users.last_name, users.contact, farms.farm_name 
        FROM schedules LEFT JOIN users ON schedules.user_id = users.id
        LEFT JOIN farms ON farms.user_id = users.id
        WHERE schedules.status = 'pending'
        AND users.status = 'active'";
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
    <link rel="stylesheet" href="/CSS/farms.css">
</head>

<body>
    <?php require "Library/loading.php"; ?>
    <?php require "Library/header.php"; ?>
    <main id="main">
        <?php require "Library/sidebar.php"; ?>
        <section id="main-section">
            <div class="content-header">
                <section class="main-content-title">
                    <h4>Farm Applications</h4>
                </section>
                <section class="main-content-body">
                    <div class="table-section">
                        <table class="ListView-Farm" id="myTable">
                            <thead>
                                <th>User Name</th>
                                <th>Farm name</th>
                                <th>Contact</th>
                                <th>Description</th>
                                <th>Date & Time</th>
                                <th>Timestamp</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody id="table-body">
                                <?php
                                if ($stmt->rowCount() > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                                        if (strtolower($row->status) == "pending") {
                                ?>
                                            <tr>
                                                <input type="hidden" value="<?= $row->id ?>">
                                                <td><?= ucfirst($row->first_name) . " " . ucfirst($row->last_name) ?></td>
                                                <td><?= !empty($row->farm_name) ? ucfirst($row->farm_name) : "No Farm yet" ?></td>
                                                <td><?= $row->contact ?></td>
                                                <td><?= $row->description ?></td>
                                                <td><?= date("m/d/Y g:iA", strtotime($row->schedule_date_time)) ?></td>
                                                <td><?= date("m/d/Y g:iA", strtotime($row->timestamp)) ?></td>
                                                <td>
                                                    <span class="<?= strtolower($row->status) == "approved" ? "Status-Green" : (strtolower($row->status) == "pending" ? "Status-Yellow" : "Status-Red") ?>">
                                                        <?= ucfirst($row->status) ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <button class="Button-Green-Icon" title="Approve">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="pointer-events: none;">
                                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                                        </svg>
                                                    </button>
                                                    <button class="Button-Red-Icon" title="Reject">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" style="pointer-events: none;">
                                                            <path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z" />
                                                        </svg>
                                                    </button>
                                                </td>
                                            </tr>
                                <?php
                                        }
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </section>
            </div>
        </section>
    </main>
    <?php require "Library/notification.php"; ?>
    <script src="Javascript/Toolkit.js"></script>
    <script type="module" src="Javascript/main.js"></script>
    <script src="Javascript/schedule-applications.js"></script>
</body>

</html>