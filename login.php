<?php
session_start();
require "config/Database.php";
if(isset($_SESSION["isLoggedIn"]) && $_SESSION["isLoggedIn"]) {
    header('Location: index.php');
    exit;
}

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to fetch user data
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email AND type = 'admin'");
    $stmt->bindParam(':email', $email, PDO::PARAM_STR);
    $stmt->execute();

    // Check if the user exists
    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        // Verify the password
        if ($password == $user['password']) {
            // Start the session and store user data
            $_SESSION['email'] = $user['email'];
            $_SESSION['id'] = $user['id'];
            $_SESSION['isLoggedIn'] = True;
            // Redirect or fetch additional data as needed
            header('Location: index.php'); // Redirect to the dashboard or another page
            exit;
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "No user found with that email!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livestock Login</title>
    <link rel="icon" type="image/x-icon" href="/Assets/Logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        type="text/css" />
    <link rel="stylesheet" href="/CSS/Toolkit.css">
    <link rel="stylesheet" href="/CSS/main.css">
    <link rel="stylesheet" href="/CSS/login.css">
</head>

<body>
    <main>
        <form action="login.php" method="POST" id="login-form">
            <section>
                <h1>Livestock Admin</h1>
                <div id="notification-bar"></div>
                <img src="/Assets/Logo.png" alt="">
                <h2>Login</h2>
                <div class="Solid-Textbox-Green">
                    <i class="fa-solid fa-user"></i>
                    <input id="email" type="email" placeholder="Enter your email address" required name="email">
                </div>
                <div class="Solid-Textbox-Green">
                    <i class="fa-solid fa-key"></i>
                    <input id="password" type="password" placeholder="•••••••••••" required name="password">
                </div>

                <button type="submit" class="Solid-Button-Green" style="font-size: 1.125rem"
                    id="LoginButton">Login</button>
            </section>
        </form>
    </main>
    <script src="/Javascript/Toolkit.js"></script>
    <script>
    </script>
    <script type="module" src="/Javascript/main.js"></script>
</body>

</html>