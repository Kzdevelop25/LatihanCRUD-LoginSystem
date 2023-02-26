<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/dashboard.css">
    <title>Rpl-1    </title>
</head>

<body>

    <header class="header">
        <h1 class="header-heading">Tambah Siswa</h1>
        <form action="../app/controller/ControllerAction.php" method="POST">
            <button type="submit" name="actionBack" class="btn back">Kembali</button>
        </form>
    </header>
    <div class="container">
        <div class="Add-Component">
            <form action="../app/views/ViewAdd.php" method="POST">
                <div class="addBox">
                    <label for="username">nama</label>
                    <input type="text" name="nama" id="username" maxlength="255" placeholder="isi nama sesuai absen">
                </div>
                <div class="addBox">
                    <label for="umur">umur</label>
                    <input type="number" name="umur" id="umur" maxlength="2" placeholder="maksimal inputan umur 2 angka">
                </div>
                <div class="addBox">
                    <label for="sekolah">sekolah</label>
                    <select name="sekolah" id="sekolah">
                        <option>SMKN 1 MAKASSAR</option>
                        <option>SMKN 2 MAKASSAR</option>
                        <option>SMKN 3 MAKASSAR</option>
                        <option>SMKN 4 MAKASSAR</option>
                        <option>SMKN 5 MAKASSAR</option>
                        <option>SMKN 6 MAKASSAR</option>
                        <option>SMKN 7 MAKASSAR</option>
                        <option>SMKN 8 MAKASSAR</option>
                        <option>SMKN 9 MAKASSAR</option>
                        <option>SMKN 10 MAKASSAR</option>
                        <option>SMKN 11 MAKASSAR</option>
                        <option>SMKN 12 MAKASSAR</option>
                        <option>SMKN 13 MAKASSAR</option>
                        <option>SMKN 14 MAKASSAR</option>
                        <option>SMKN 15 MAKASSAR</option>
                    </select>
                </div>
                <div class="addBox">
                    <label for="jurusan">jurusan</label>
                    <select name="jurusan" id="jurusan">
                        <option>Akuntansi Dan Keuangan</option>
                        <option>Animasi</option>
                        <option>Bisnis Manajemen</option>
                        <option>Busana Butik</option>
                        <option>Ilmu Pariwisata</option>
                        <option>Multimedia</option>
                        <option>Otomotif</option>
                        <option>Perhotelan</option>
                        <option>Pelayaran</option>
                        <option>Perawatan Sosiak</option>
                        <option>Rekayasa Perangkat Lunak</option>
                        <option>Kuliner</option>
                    </select>
                </div>
                <div class="addBox">
                    <label for="kelas">kelas</label>
                    <select name="kelas" id="kelas">
                        <option>X</option>
                        <option>XI</option>
                        <option>XII</option>
                    </select>
                </div>
                <div class="addBox">
                    <label for="profile">Profile</label>
                    <input type="text" name="profile">
                </div>
                <button type="submit" name="Tambah" class="btn Tambah">Tambah</button>
            </form>
        </div>
    </div>

</body>

</html>