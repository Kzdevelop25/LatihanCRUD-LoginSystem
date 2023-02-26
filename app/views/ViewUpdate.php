<?php
include("../model/db.php");
// cek apakah tombol sudah di klik
if (isset($_POST['ubah'])) {

    $id = $_POST['id'];
    $nama = htmlspecialchars($_POST['nama']);
    $umur = htmlspecialchars($_POST['umur']);
    $sekolah = htmlspecialchars($_POST['sekolah']);
    $jurusan = htmlspecialchars($_POST['jurusan']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $profile = htmlspecialchars($_POST['profile']);

    // cek apakah form kosong atau tidak
    if ($nama == null || $umur == null || $sekolah == null || $jurusan == null) {
        header("Location: ../../dashboard/update-user.php?id=$id&message=Tolong+Isi+Dengan Benar");
    } else {
        // mengambil 2 huruf pertama dari umur
        $umur = substr($umur, 0, 7);

        $sql = "UPDATE siswa SET
            nama = '$nama',
            umur = '$umur',
            kelas = '$kelas',
            sekolah = '$sekolah',
            jurusan = '$jurusan', profile = '$profile'
             WHERE id = $id";
        $result = $db->query($sql);

        if ($result === TRUE) {
            header("Location: ../../dashboard/user.php?id=$id&message=Data+Berhasil+Diubah");
        } else {
            header("Location: ../../dashboard/user.php?id=$id&message=Data+Gagal+Diubah");
        }
    }
}
