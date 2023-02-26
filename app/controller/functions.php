<?php
include("../model/db.php");

function registration($data){
    global $db;
    $username = stripslashes($data['username']);
    $password = mysqli_escape_string($db,$data['password']);

    $sql = "SELECT username FROM users WHERE username = '$username'";
    $result = $db->query($sql);
    if($row = $result->fetch_assoc()){
        if($row['username'] == $username){
            return false;
        }
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "INSERT INTO users VALUES (NULL, '$username', '$password')";
    $db->query($sql);

    return $db->affected_rows;
}



?>