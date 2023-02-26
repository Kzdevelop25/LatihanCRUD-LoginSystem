<?php
include("../model/db.php");

if(isset($_POST['hapus'])){

    $id = $_POST['id'];
    $sql = "DELETE FROM siswa WHERE id = $id";
    $result = $db->query($sql);
    if($result === TRUE){
        header("Location: ../../dashboard/index.php?message=Data+Berhasil+Dihapus");
    }else{
        header("Location: ../../dashboard/index.php?message=Data+Gagal+Dihapus");
    }
}



?>