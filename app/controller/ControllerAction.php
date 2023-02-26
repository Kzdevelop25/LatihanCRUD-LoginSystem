<?php

if(isset($_POST['actionAdd'])){
    header("Location: ../../dashboard/Tambah.php");
}

else if(isset($_POST['actionBack'])){
    header("Location: ../../dashboard/index.php");
}

else if(isset($_POST['view'])){
    $id = intval($_POST['id']);
    header("Location: ../../dashboard/user.php?id=$id");
}

else if(isset($_POST['actionUpdate'])){
    $id = intval($_POST['id']);
    header("Location: ../../dashboard/update-user.php?id=$id");
}else{
    header("Location: ../../dashboard/index.php");
}
