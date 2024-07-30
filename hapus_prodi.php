<?php 

require "responsi_20.01.4515.php";

$id = $_GET["id"];

if(hapus_prodi($id) > 0) {
    echo "
            <script>
            alert('Data BERHASIL Dihapus');
            document.location.href = 'content.php';
            </script>        
        ";
} else {
    echo "
            <script>
            alert('Data GAGAL Dihapus');
            document.location.href = 'content.php';
            </script>        
        ";
}

?>