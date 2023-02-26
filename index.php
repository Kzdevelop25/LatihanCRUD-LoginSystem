<?php
session_start();
if (isset($_SESSION["user"]) && $_SESSION['user'] === 'login') {
    header("Location: dashboard/index.php");
}else if(isset($_SESSION['admin']) && $_SESSION['admin'] === 'login'){
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
        <h1 class="title">Login</h1>



        <div class="center">
            <?php if (isset($_GET['message'])) : ?>
                <?php $msg = $_GET['message'];
                $msg = str_replace("-", " ", $msg);
                ?>
                <div class="message">
                    <p><?= $msg ?></p>
                </div>
            <?php endif;  ?>
            <form method="POST" action="app/views/ViewLogin.php">
                <div class="login">
                    <label for="users">username</label>
                    <input type="text" name="username" id="users" required />
                </div>
                <div class="login">
                    <div class="pass">
                        <label for="password">password</label>
                        <!-- <label for="forgot"><a href="password_reset.php">Forgot Password?</a></label> -->
                    </div>
                    <input type="text" name="password" id="password" required />
                </div>
                <button type="submit" class="btn" name="login">Login</button>
                <div class="verify">
                    <label for="remember">Remember Me?</label>
                    <input type="checkbox" name="remember" id="remember" />
                </div>
                <div class="signup">
                    <p>
                        Belum Punya Akun? <a href="sign-up.php">Registrasi Akun</a>.
                    </p>
                </div>
            </form>

        </div>
    </div>
</body>

</html>