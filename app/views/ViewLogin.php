<?php
include("../model/db.php");
session_start();
if (isset($_POST['login'])) {
    global $db;

    $username = stripslashes($_POST['username']);
    $password = mysqli_escape_string($db,$_POST['password']);

    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $db->query($sql);
    if ($result->num_rows === 1) {
        $row = $result->fetch_object();
        // $_SESSION['status'] = "login";
        if (password_verify($password, $row->password)) {
            if ($row->username === 'admin') {
                $_SESSION['admin'] = "login";
                header("Location: ../../admin/index.php");
            } else {
                $_SESSION['user'] = "login";
                header("Location: ../../dashboard/index.php");
            }
        }else {
            header("Location: ../../index.php?message=username+atau+password+salah");
        }
    } else {
        header("Location: ../../index.php?message=username+atau+password+salah");
    }
}
