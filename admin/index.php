<?php
session_start();
if (!isset($_SESSION['admin'])) {
    if (isset($_SESSION['user']) && $_SESSION['user'] === 'login') {
        header("Location: ../dashboard/index.php");
    } else {
        if ($_SESSION['admin'] !== "login") {
            session_destroy();
            header("Location: ../index.php?message=silahkan-login-terlebih-dahulu");
        }
    }
}

var_dump("ini halaman admin");
