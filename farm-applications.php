<?php
require "config/Database.php";

$sql = "SELECT farms.*, users.first_name, users.last_name FROM farms LEFT JOIN users ON users.id = farms.user_id 
        WHERE farms.status = 'pending' AND users.status = 'active'";
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
                                <th>Farm name</th>
                                <th>Owner name</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </thead>
                            <tbody id="table-body">
                                <?php
                                if ($stmt->rowCount() > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                        <tr>
                                            <input type="hidden" value="<?= $row->id ?>">
                                            <input type="hidden" value="<?= $row->geolocation ?>">
                                            <td><?= ucfirst($row->farm_name) ?></td>
                                            <td><?= ucfirst($row->first_name) . " " . ucfirst($row->last_name) ?></td>
                                            <td>
                                                <span class="<?= strtolower($row->status) == "verified" ? "Status-Green" : (strtolower($row->status) == "pending" ? "Status-Yellow" : "Status-Red") ?>">
                                                    <?= ucfirst($row->status) ?>
                                                </span>
                                            </td>
                                            <td>
                                                <button class="Button-Blue-Icon" title="Open file">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" style="pointer-events: none;">
                                                        <path d="M88.7 223.8L0 375.8 0 96C0 60.7 28.7 32 64 32l117.5 0c17 0 33.3 6.7 45.3 18.7l26.5 26.5c12 12 28.3 18.7 45.3 18.7L416 96c35.3 0 64 28.7 64 64l0 32-336 0c-22.8 0-43.8 12.1-55.3 31.8zm27.6 16.1C122.1 230 132.6 224 144 224l400 0c11.5 0 22 6.1 27.7 16.1s5.7 22.2-.1 32.1l-112 192C453.9 474 443.4 480 432 480L32 480c-11.5 0-22-6.1-27.7-16.1s-5.7-22.2 .1-32.1l112-192z" />
                                                    </svg>
                                                </button>
                                                <button class="Button-Purple-Icon" title="Open Location">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="pointer-events: none;">
                                                        <path d="M12,11.5A2.5,2.5 0 0,1 9.5,9A2.5,2.5 0 0,1 12,6.5A2.5,2.5 0 0,1 14.5,9A2.5,2.5 0 0,1 12,11.5M12,2A7,7 0 0,0 5,9C5,14.25 12,22 12,22C12,22 19,14.25 19,9A7,7 0 0,0 12,2Z" />
                                                    </svg>
                                                </button>
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
    <script src="Javascript/farm-applications.js"></script>
</body>

</html>