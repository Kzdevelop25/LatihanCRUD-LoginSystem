<?php
include("../app/model/db.php");

// cek apakah url id ada atau tidak
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM siswa WHERE id = $id";
    $result = $db->query($sql);
}
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

    <header class="header">
        <h1 class="header-heading">Ubah Data Siswa</h1>
        <form action="../app/controller/ControllerAction.php" method="POST">
            <button type="submit" name="actionBack" class="btn back">Kembali</button>
        </form>
    </header>
    <div class="container">
        <div class="Add-Component">
            <?php if ($row = mysqli_fetch_assoc($result)) : ?>
                <form action="../app/views/ViewUpdate.php" method="POST">
                    <div class="addBox">
                        <label for="username">nama</label>
                        <input type="text" name="nama" id="username" maxlength="255" value="<?= $row['nama'] ?>">
                    </div>
                    <div class="addBox">
                        <label for="umur">umur</label>
                        <input type="number" name="umur" id="umur" maxlength="2" value="<?= $row['umur'] ?>">
                    </div>
                    <div class="addBox updateBox">
                        <label for="sekolah">sekolah</label>
                        <select name="sekolah" id="sekolah">
                            <option <?php if($row['sekolah'] == 'SMKN 1 MAKASSAR'){echo "selected";};?>>SMKN 1 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 2 MAKASSAR'){echo "selected";};?>>SMKN 2 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 3 MAKASSAR'){echo "selected";};?>>SMKN 3 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 4 MAKASSAR'){echo "selected";};?>>SMKN 4 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 5 MAKASSAR'){echo "selected";};?>>SMKN 5 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 6 MAKASSAR'){echo "selected";};?>>SMKN 6 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 7 MAKASSAR'){echo "selected";};?>>SMKN 7 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 8 MAKASSAR'){echo "selected";};?>>SMKN 8 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 9 MAKASSAR'){echo "selected";};?>>SMKN 9 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 10 MAKASSAR'){echo "selected";};?>>SMKN 10 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 11 MAKASSAR'){echo "selected";};?>>SMKN 11 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 12 MAKASSAR'){echo "selected";};?>>SMKN 12 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 13 MAKASSAR'){echo "selected";};?>>SMKN 13 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 14 MAKASSAR'){echo "selected";};?>>SMKN 14 MAKASSAR</option>
                            <option <?php if($row['sekolah'] == 'SMKN 15 MAKASSAR'){echo "selected";};?>>SMKN 15 MAKASSAR</option>
                        </select>
                    </div>
                    <div class="addBox updateBox">
                        <label for="jurusan">jurusan</label>
                        <select name="jurusan" id="jurusan">
                            <option <?php if($row['jurusan'] === 'Akuntansi Dan Keuangan  '){echo "selected"; }?>>Akuntansi Dan Keuangan  </option>
                            <option <?php if($row['jurusan'] === 'Animasi                 '){echo "selected"; }?>>Animasi                 </option>
                            <option <?php if($row['jurusan'] === 'Bisnis Manajemen        '){echo "selected"; }?>>Bisnis Manajemen        </option>
                            <option <?php if($row['jurusan'] === 'Busana Butik            '){echo "selected"; }?>>Busana Butik            </option>
                            <option <?php if($row['jurusan'] === 'Ilmu Pariwisata         '){echo "selected"; }?>>Ilmu Pariwisata         </option>
                            <option <?php if($row['jurusan'] === 'Multimedia              '){echo "selected"; }?>>Multimedia              </option>
                            <option <?php if($row['jurusan'] === 'Otomotif                '){echo "selected"; }?>>Otomotif                </option>
                            <option <?php if($row['jurusan'] === 'Perhotelan              '){echo "selected"; }?>>Perhotelan              </option>
                            <option <?php if($row['jurusan'] === 'Pelayaran               '){echo "selected"; }?>>Pelayaran               </option>
                            <option <?php if($row['jurusan'] === 'Perawatan Sosiak        '){echo "selected"; }?>>Perawatan Sosiak        </option>
                            <option <?php if($row['jurusan'] === 'Rekayasa Perangkat Lunak'){echo "selected"; }?>>Rekayasa Perangkat Lunak</option>
                            <option <?php if($row['jurusan'] === 'Kuliner                 '){echo "selected"; }?>>Kuliner                 </option>
                        </select>
                    </div>
                    <div class="addBox updateBox">
                        <label for="kelas">kelas</label>
                        <select name="kelas" id="kelas">
                            <option <?php if($row['kelas'] == 'X'){echo "selected"; }?>>X  </option>
                            <option <?php if($row['kelas'] == 'XI'){echo "selected"; }?>>XI </option>
                            <option <?php if($row['kelas'] == 'XII'){echo "selected"; }?>>XII</option>
                        </select>
                    </div>
                    <div class="addBox">
                        <label for="profile">Profile</label>
                        <input type="file" name="profile" value="<?= $row['profile']?>">
                        <input type="hidden" name="id" value="<?= $row['id']?>">
                    </div>
                    <button type="submit" name="ubah" class="btn Tambah">Simpan Perubahan</button>
                </form>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>