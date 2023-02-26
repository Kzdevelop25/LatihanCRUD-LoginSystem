<?php
include "../controller/functions.php";
if(isset($_POST['registration'])){
    if(registration($_POST) > 0){
        header("Location: ../../index.php");
    }else{
        header("Location: ../../sign-up.php?message=username+sudah+terdaftar");
    }
}
