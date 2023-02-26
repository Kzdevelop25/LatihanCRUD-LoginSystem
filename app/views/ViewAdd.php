<?php
include("../model/db.php");

if (isset($_POST['Tambah'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $umur = htmlspecialchars($_POST['umur']);
    $sekolah = htmlspecialchars($_POST['sekolah']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $profile = htmlspecialchars($_POST['profile']);


    // cek apakah form kosong atau tidak
    if ($nama == null || $umur == null || $sekolah == null || $jurusan == null) {
        header("Location: ../../dashboard/Tambah.php?message=Tolong+Isi+Dengan+Benar");
        return false;
    } else {
        // mengambil 2 huruf pertama dari umur
        $umur = substr($umur, 0, 7);

        $sql = "INSERT INTO siswa VALUES (NULL,'$nama', '$umur', '$kelas','$sekolah','$jurusan','$profile')";
        $result = $db->query($sql);

        if ($result) {
            header("Location: ../../dashboard/index.php?message=Data+Berhasil+Ditambahkan");
        } else {
            header("Location: ../../dashboard/index.php?message=Data+Gagal+Ditambahkan");
        }
    }
}
