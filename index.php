<?php 
session_start();
require "config/Database.php";
if (!$_SESSION["isLoggedIn"]) {
    header('Location: login.php');
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
    <link rel="stylesheet" href="/CSS/dashboard.css">
</head>

<body>
    <?php require "Library/loading.php"; ?>
    <?php require "Library/header.php"; ?>
    <main id="main">
        <?php require "Library/sidebar.php"; ?>
        <section id="main-section">
            <div class="content-header">
                <section class="main-content-title">
                    <h4>Dashboard</h4>
                </section>
                <section class="main-content-body">
                    <div><canvas id="user-type-chart"></canvas></div>
                    <div><canvas id="livestock-chart"></canvas></div>
                    <div></div>
                </section>
            </div>

        </section>
    </main>
    <?php require "Library/notification.php"; ?>
    <script src="Javascript/Toolkit.js"></script>
    <script type="module" src="Javascript/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.0/chart.js"
        integrity="sha512-ohOeYvGoLlCxYkfMoPBKJh/wp4Oe76rEJDWOmQq1LLrJD6yCBSPVmhhXuZYvuxdYR3PiozsUf+TZZ6yhVBGYAQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="/Javascript/dashboard.js"></script>
</body>

</html>