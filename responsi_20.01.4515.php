<?php 

//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "responsi_20.01.4515");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah_prodi($data) {
    global $conn;

    $nama = $data["nama"];
    $deskripsi = $data["deskripsi"];
    $konsentrasi = $data["konsentrasi"];

    $query = "INSERT INTO prodi VALUES ('$nama', '$deskripsi', '$konsentrasi')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function tambah_mahasiswa($data) {
    global $conn;

    $nim = $data["nim"];
    $nama = $data["nama"];

    $query = "INSERT INTO mahasiswa VALUES ('$nim', '$nama',)";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus_prodi($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM prodi WHERE id='$id' ");
    return mysqli_affected_rows($conn);
}

function hapus_mahasiswa($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id='$id' ");
    return mysqli_affected_rows($conn);
}

function ubah_prodi($data) {
    global $conn;

    $id = $data["id"];
    $nama = $data["nama"];
    $deskripsi = $data["deskripsi"];
    $konsentrasi = $data["konsentrasi"];

    $query = "UPDATE prodi SET nama_prodi='$nama', deskripsi_prodi='$deskripsi', konsentrasi_prodi='$konsentrasi' WHERE id='$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah_mahasiswa($data) {
    global $conn;

    $id = $data["id"];
    $nim = $data["nim"];
    $nama = $data["nama"];

    $query = "UPDATE mahasiswa SET nim_mahasiswa='$nim', nama_mahasiswa='$nama' WHERE id='$id' ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>