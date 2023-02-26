<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION['user'] === 'login') {
    header("Location: dashboard/index.php");
} else if (isset($_SESSION['admin']) && $_SESSION['admin'] === 'login') {
    header("Location: admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <title>Rpl-1</title>
</head>

<body>
    <div class="container">
        <h1 class="title">Registration</h1>

        <?php if (isset($_GET['message'])) {
            $msg = $_GET['message'];
            echo "<div class='message'>";
            echo "<p>" . $msg . "</p>";
            echo "</div>";
        } ?>


        <div class="center">
            <form method="POST" action="app/views/ViewRegistration.php">
                <div class="login">
                    <label for="users">username</label>
                    <input type="text" name="username" id="users" required />
                </div>
                <div class="login">
                    <label for="password">password</label>
                    <input type="text" name="password" id="password" required />
                </div>
                <button type="submit" class="btn" name="registration">Login</button>
                <div class="signup">
                    <p>
                        Sudah Punya Akun? <a href="index.php">Login</a>.
                    </p>
                </div>
            </form>

        </div>
    </div>
</body>

</html>