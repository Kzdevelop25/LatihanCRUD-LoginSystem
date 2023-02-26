<?php
include("../app/model/db.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // pastikan ID hanya berisi angka
    if (!ctype_digit($id)) {
        // redirect ke halaman error jika ID tidak valid
        header("Location: ./index.php");
        exit();
    }
    // konversi nilai ID menjadi integer
    $id = intval($id);
    $sql = "SELECT * FROM siswa WHERE id = $id";
    $result = $db->query($sql);
    // pastikan ID yang diterima ada di database
    if ($result->num_rows == 0) {
        // redirect ke halaman error jika ID tidak ditemukan di database
        header("Location: ./index.php");
        exit();
    }
} else {
    // redirect ke halaman utama jika ID tidak ada di URL
    header("Location: ./index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <link rel="stylesheet" href="../assets/css/user.css">
    <title>Rpl-1</title>
</head>

<body>

    <div class="container">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="row">
                <div class="Update">
                    <form action="../app/controller/ControllerAction.php" method="POST">
                        <button type="submit" name="actionUpdate" class="btn Logout btn-update"><ion-icon name="create-outline"></ion-icon></button>
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    </form>
                </div>
                <div class="profile-column">
                    <div class="profile-img">
                        <img src="../assets/img/<?= $row['profile'] ?>" alt="Gambar User">
                    </div>
                </div>
                <div class="btn-back">
                    <form action="../app/controller/ControllerAction.php" method="POST">
                        <button type class="btn Logout" name="actionBack"><ion-icon name="arrow-undo-outline"></ion-icon></button>
                    </form>
                </div>
            </div>

            <div class="user">
                <div class="user-info">
                    <h3 class="name-info"><span class="bold">Nama</span> : <span class="uppercase"><?= strtolower($row['nama']); ?></span></h3>
                </div>
                <div class="user-info">
                    <h3 class="name-info"><span class="bold">Umur</span> : <span class="uppercase"><?= strtolower($row['umur']); ?></span></h3>
                </div>
                <div class="user-info">
                    <h3 class="name-info"><span class="bold">Sekolah</span> : <span class="uppercase"><?= strtolower($row['sekolah']); ?></span></h3>
                </div>
                <div class="user-info">
                    <h3 class="name-info"><span class="bold">Kelas</span> : <span class="uppercase"><?= strtoupper($row['kelas']); ?></span></h3>
                </div>
                <div class="user-info">
                    <h3 class="name-info"><span class="bold">Jurusan</span> : <span class="uppercase"><?= strtolower($row['jurusan']); ?></span></h3>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>