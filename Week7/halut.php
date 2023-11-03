<?php

require'functions.php';
$brg = query("SELECT * FROM game");
?>


<!DOCTYPE html>
<html lang="en">
<head><title>HALAMAN ADMIN</title></head>
<body>
    <h1>Daftar Game</h1>

    <a href="tambah.php">Tambah Data Game</a>
    <br><br>

    <table border="1" cellpading = "10" cellspacing = "0">
        <tr>
            <th>No.</th>
            <th>Nama Game</th>
            <th>Jenis Game</th>
            <th>Batas Umur</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($brg as $row) :?>
        <tr>
            <td><?= $i?></td>
            <td><?=$row["nama"];?></td>
            <td><?=$row["jenis_game"];?></td>
            <td><?=$row["batas_umur"];?></td>
            <td>
                <a href="">Ubah</a>
                <b>|</b>
                <a href="hapus.php?game_id=<?= $row["game_id"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')">Hapus</a>
            </td>
        </tr>
        <?php $i++;?>
        <?php endforeach;?>
    </table>
</body>
</html>