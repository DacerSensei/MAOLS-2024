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
                    <h4>Owner Accounts</h4>
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
                                <th>Actions</th>
                            </thead>
                            <tbody id="table-body">
                                <?php
                                if ($stmt->rowCount() > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                                        if (strtolower($row->status) != "pending") {
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
                                                <td>
                                                    <button class="Button-Blue-Icon" title="Open file">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                                                            <path d="M88.7 223.8L0 375.8 0 96C0 60.7 28.7 32 64 32l117.5 0c17 0 33.3 6.7 45.3 18.7l26.5 26.5c12 12 28.3 18.7 45.3 18.7L416 96c35.3 0 64 28.7 64 64l0 32-336 0c-22.8 0-43.8 12.1-55.3 31.8zm27.6 16.1C122.1 230 132.6 224 144 224l400 0c11.5 0 22 6.1 27.7 16.1s5.7 22.2-.1 32.1l-112 192C453.9 474 443.4 480 432 480L32 480c-11.5 0-22-6.1-27.7-16.1s-5.7-22.2 .1-32.1l112-192z" />
                                                        </svg>
                                                    </button>
                                                    <button class="Button-Yellow-Icon" title="Edit">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="pointer-events: none;">
                                                            <path d="M14.06,9L15,9.94L5.92,19H5V18.08L14.06,9M17.66,3C17.41,3 17.15,3.1 16.96,3.29L15.13,5.12L18.88,8.87L20.71,7.04C21.1,6.65 21.1,6 20.71,5.63L18.37,3.29C18.17,3.09 17.92,3 17.66,3M14.06,6.19L3,17.25V21H6.75L17.81,9.94L14.06,6.19Z" />
                                                        </svg>
                                                    </button>
                                                    <button class="Button-Red-Icon" title="Delete">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="pointer-events: none;">
                                                            <path d="M9,3V4H4V6H5V19A2,2 0 0,0 7,21H17A2,2 0 0,0 19,19V6H20V4H15V3H9M7,6H17V19H7V6M9,8V17H11V8H9M13,8V17H15V8H13Z" />
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
</body>

</html>