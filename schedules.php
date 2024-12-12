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
                            <button class="Button-Green-Dark">Today</button>
                            <button class="Button-Default">Tomorrow</button>
                            <div class="Calendar-Picker-Container">
                                <button class="Button-Default-Icon ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M7 11H9V13H7V11M19 3H18V1H16V3H8V1H6V3H5C3.9 3 3 3.9 3 5V19C3 20.1 3.9 21 5 21H19C20.1 21 21 20.1 21 19V5C21 3.9 20.1 3 19 3M19 5V7H5V5H19M5 19V9H19V19H5M11 15H13V17H11V15M15 15H17V17H15V15M15 11H17V13H15V11Z" />
                                    </svg>
                                    Select a Date
                                </button>
                                <div>
                                    <div class="Calendar-Picker-Header"></div>
                                    <div class="Calendar-Picker-Body"></div>
                                </div>
                            <div>
                        </div>
                        <div></div>
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