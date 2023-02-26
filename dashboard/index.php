<?php
session_start();
if (!isset($_SESSION['user'])) {
    if ($_SESSION['user'] !== 'login') {
        header("Location: ../index.php?message=silahkan-login-terlebih-dahulu");
    }
}
include("../app/model/db.php");
$sql = "SELECT * FROM siswa";
$result = $db->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>Rpl-1</title>
</head>

<body>

    <div class="container">
        <div class="addContainer">
            <form action="../app/controller/ControllerAction.php" method="POST">
                <button type="submit" class="btn Add" name="actionAdd">Tambah Siswa</button>
            </form>
        </div>

        <form action="../app/views/ViewLogout.php" method="POST">
            <button type="submit" class="btn Logout" name="logout">keluar</button>
        </form>

        <div class="siswaTable">
            <table>
                <thead>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Sekolah</th>
                    <th>Jurusan</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    <?php $i = 1;
                    while ($row = $result->fetch_assoc()) :
                    ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td class="col-nama"><?= $row['nama'] ?></td>
                            <td class="col-sekolah"><?= $row['sekolah'] ?></td>
                            <td class="col-jurusan"><?= $row['jurusan'] ?></td>
                            <td>
                                <div class="action-component">
                                    <div class="btn-page-view">
                                        <form action="../app/controller/ControllerAction.php" method="POST">
                                            <button type="submit" class="btn btn-view" name="view">Lihat</button>
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        </form>
                                    </div>
                                    <div class="btn-page-delete">
                                        <form action="../app/views/ViewDelete.php" method="POST">
                                            <button type="submit" class="btn btn-delete" name="hapus">Hapus</button>
                                            <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>