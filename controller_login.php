<?php 
session_start();

include "responsi_20.01.4515.php";

$nim = $_POST['nim'];
$nama = $_POST['nama'];

//mengecek ke dalam table users
$cek_login = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE nim_mahasiswa = '$nim' and nama_mahasiswa = '$nama' ");

//mengecek barisnya
$cek = mysqli_num_rows($cek_login);

//mengerahkan ke sebuah halaman
if ($cek > 0) {
    $_SESSION['nim'] = $nim;
    $_SESSION['nama'] = $nama;
    $_SESSION['status'] = 'login';

    header('location:content.php');
} else {
    header('location:login.php');
}
?>