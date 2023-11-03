<?php
$conn = mysqli_connect("localhost:3308","root","","tokogame");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;

}

function hapus($no){
    global $conn;
    mysqli_query($conn,"DELETE FROM game WHERE game_id = $no");
    return mysqli_affected_rows($conn);
}
?>
