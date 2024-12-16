<?php
require "config/Database.php";

$sql = "SELECT * FROM announcements ORDER BY timestamp DESC";
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
    <link rel="stylesheet" href="/CSS/announcements.css">
</head>

<body>
    <div id="Add-Modal" class="modal-container">
        <div class="modal-content" style="width: -webkit-fill-available; height: -webkit-fill-available;">
            <div class="modal-header">
                <h4>Create Announcements</h4>
                <span class="modal-close">&times;</span>
            </div>
            <div class="modal-body" style="padding: 1rem; box-sizing: border-box;">
                <form method="post" id="announcement-form">
                    <section>
                        <h2>Announcement</h2>
                        <p>Create a new announcement</p>

                        <div class="Solid-Textbox-Green">
                            <i class="fa-solid fa-t"></i>
                            <input id="announcement-title" type="text" placeholder="Enter your title" required>
                        </div>
                        <div class="Solid-Textbox-Green">
                            <i class="fa-solid fa-b"></i>
                            <input id="announcement-body" type="text" placeholder="Enter your body" required>
                        </div>
                        <div class="Solid-Textbox-Green">
                            <i class="fa-solid fa-d"></i>
                            <input id="announcement-description" type="text" placeholder="Enter your description" required>
                        </div>
                        <button type="submit" class="Solid-Button-Red" style="font-size: 1.125rem">Create Announcement</button>
                    </section>
                </form>
            </div>
        </div>
    </div>
    <?php require "Library/loading.php"; ?>
    <?php require "Library/header.php"; ?>
    <main id="main">
        <?php require "Library/sidebar.php"; ?>
        <section id="main-section">
            <div class="content-header">
                <section class="main-content-title">
                    <h4>Announcements</h4>
                </section>

                <section class="main-content-body">
                    <section class="main-content-header">
                        <button class="Button-Green-Dark modal-trigger" id="add-button" data-target="Add-Modal">Create Announcement</button>
                    </section>
                    <div class="table-section">
                        <table class="ListView-Farm" id="myTable">
                            <thead>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Time</th>
                                <th>Actions</th>
                            </thead>
                            <tbody id="table-body">
                                <?php
                                if ($stmt->rowCount() > 0) {
                                    while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                                ?>
                                        <tr>
                                            <input type="hidden" value="<?= $row->id ?>">
                                            <td><?= $row->title ?></td>
                                            <td><?= $row->body ?></td>
                                            <td><?= $row->description ?></td>
                                            <td><?= date("F, d Y", strtotime($row->timestamp)) ?></td>
                                            <td><?= date("g:iA", strtotime($row->timestamp)) ?></td>
                                            <td>
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
    <script src="Javascript/announcements.js"></script>
</body>

</html>