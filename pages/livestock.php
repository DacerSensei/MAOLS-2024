<?php
$doucmentRoot = $_SERVER['DOCUMENT_ROOT'];
require "$doucmentRoot/config/Database.php";
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    if (isset($_GET["farm_name"]) && isset($_GET["farm_id"])) {
        $farm_name = $_GET["farm_name"];
        $farm_id = $_GET["farm_id"];
        $sql = "SELECT livestocks.*, livestock_type.type_name, livestock_type.icon FROM livestocks LEFT JOIN livestock_type ON livestock_type.type_id = livestocks.type WHERE livestocks.farm_id = '$farm_id'";

        $stmt = $pdo->query($sql);
    }
} else {
    exit;
}


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
    <link rel="stylesheet" href="/CSS/livestock.css">
</head>

<body>
    <?php require "$doucmentRoot/Library/loading.php"; ?>
    <?php require "$doucmentRoot/Library/header.php"; ?>
    <main id="main">
        <?php require "$doucmentRoot/Library/sidebar.php"; ?>
        <section id="main-section">
            <div class="content-header">
                <section class="main-content-title">
                    <h4>Farms > <?= $farm_name ?></h4>
                </section>
                <section class="main-content-body">
                    <div class="livestock-section">
                        <div class="livestock-section-header">
                            <button class="Button-Green-Dark" id="print-button">Generate PDF</button>
                        </div>
                        <div class="livestock-section-body">
                            <?php
                            if ($stmt->rowCount() > 0) {
                                while ($row = $stmt->fetch(PDO::FETCH_OBJ)) {
                            ?>
                                    <div class="livestock">
                                        <input type="hidden" value="<?= $row->id ?>">
                                        <div class="livestock-header">
                                            <h1><?= $row->type_name ?></h1>
                                        </div>
                                        <div class="livestock-body">
                                            <img src="/uploads/livestock_icon/<?= $row->icon ?>">
                                        </div>
                                        <div class="livestock-footer">
                                            <p><?= $row->animal_tag ?></p>
                                        </div>
                                        <div class="livestock-actions">
                                            <button class="Button-Blue width-fill-available">Details</button>
                                            <button class="Button-Yellow width-fill-available">Modify</button>
                                        </div>
                                    </div>
                            <?php
                                }
                            } else {
                                echo "No registered livestock";
                            }
                            ?>
                        </div>
                </section>
            </div>

        </section>
    </main>
    <?php require "$doucmentRoot/Library/notification.php"; ?>
    <script src="/Javascript/Toolkit.js"></script>
    <script type="module" src="/Javascript/main.js"></script>
    <script src="/Javascript/livestocks.js"></script>
</body>

</html>