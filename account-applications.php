<?php
require "config/Database.php";

$sql = "SELECT * FROM users";
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
    <link rel="stylesheet" href="/CSS/owner-accounts.css">
</head>

<body>
    <?php require "Library/loading.php"; ?>
    <?php require "Library/header.php"; ?>
    <main id="main">
        <?php require "Library/sidebar.php"; ?>
        <section id="main-section">
            <div class="content-header">
                <section class="main-content-title">
                    <h4>Account Applications</h4>
                </section>
                <section class="main-content-body">
                    <div class="table-section">
                        <table class="ListView-Farm" id="myTable">
                            <thead>
                                <th>Full name</th>
                                <th>Email</th>
                                <th>Contact</th>
                                <th>Account Type</th>
                                <th>Status</th>
                                <th>Date & Time</th>
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
                                                <td><?= $row->email ?></td>
                                                <td><?= $row->contact ?></td>
                                                <td>
                                                    <span class="<?= strtolower($row->type) == "admin" ? "Status-Purple" : "Status-Blue" ?>">
                                                        <?= ucfirst($row->type) ?>
                                                    </span>
                                                </td>
                                                <td>
                                                    <span class="<?= strtolower($row->status) == "active" ? "Status-Green" : (strtolower($row->status) == "pending" ? "Status-Yellow" : "Status-Red") ?>">
                                                        <?= ucfirst($row->status) ?>
                                                    </span>
                                                </td>
                                                <td><?= date("m/d/Y g:iA", strtotime($row->timestamp)) ?></td>
                                                <td>
                                                    <button class="Button-Green-Icon" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="pointer-events: none;">
                                                            <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                                                        </svg>
                                                    </button>
                                                    <button class="Button-Red-Icon" title="Delete">
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
    <script src="Javascript/account-applications.js"></script>
</body>

</html>