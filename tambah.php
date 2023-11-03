<?php

$conn = mysqli_connect("localhost:3308","root","","tokogame");

if (isset($_POST["submit"])){
    $nama = $_POST["nama"];
    $jenis_game = $_POST["jenis_game"];
    $batas_umur = $_POST["batas_umur"];

    $query = "INSERT INTO game
        VALUES
        ('','$nama','$jenis_game','$batas_umur')";
    mysqli_query($conn, $query);
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data game</title>
</head>
<body>
    <h1>Tambah data game</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama Game :</label><br>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jenis_game">Jenis Game  :</label><br>
                <input type="text" name="jenis_game" id="jenis_game">
            </li>
            <li>
                <label for="batas_umur">Batas Umur  :</label><br>
                <input type="text" name="batas_umur" id="batas_umur"><br><br>
            </li>
            <li>
                <input type="submit" name="submit" id="submit"><br><br>
                <a href="halut.php">BALIK</a>
            </li>
        </ul>
    </form>
</body>
</html>