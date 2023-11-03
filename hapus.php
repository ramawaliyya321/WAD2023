<?php
require 'functions.php';
$no = $_GET["game_id"];

if (hapus($no) > 0){
    echo "
    <script>
        alert('data berhasil dihapus!');
        document.location.href = 'hatul.php';
    </script>
 ";
} else {
    echo "
    <script>
        alert('data gagal dihapus!');
        document.location.href = 'hatul.php';
    </script>
 ";
}

?>