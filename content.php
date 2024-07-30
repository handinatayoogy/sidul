<?php 

require "responsi_20.01.4515.php";
$mhs = query("SELECT * FROM mahasiswa");
$prodi = query("SELECT * FROM prodi");

?>


<?php include 'head.php'; ?>
<div class="container">
    <?php include 'navbar.php'; ?>

    <body>
        <h1>HALAMAN DASHBOARD</h1>
        <?php include 'aside.php'; ?>

        <h3>DAFTAR DATA PRODI</h3>
        <a class="btn btn-primary tambah" href="tambah_prodi.php" role="button">Tambah Data Prodi</a>
        <table class="table table-striped table-bordered border border-secondary">
            <thead>
            <tr>
              <th scope="col">NO.</th>
              <th scope="col">NAMA</th>
              <th scope="col">DESKRIPSI</th>
              <th scope="col">KONSENTRASI</th>
              <th scope="col">AKSI</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach($prodi as $rowprodi) : ?>
            <tbody class="align-baseline">
              <tr>
                <td><?= $i; ?></td>
                <td><?= $rowprodi["nama_prodi"]; ?></td>
                <td><?= $rowprodi["deskripsi_prodi"]; ?></td>
                <td><?= $rowprodi["konsentrasi_prodi"]; ?></td>
                <td>
                    <a class="btn btn-warning" href="ubah_prodi.php" role="button">Ubah</a>
                    <a class="btn btn-danger" href="hapus_prodi.php?id=<?= $rowprodi["id"]; ?>" role="button" onclick="confirm('Apakah anda yakin untuk menghapus data ?')">Hapus</a>
                </td>
              </tr>
            </tbody>
            <?php $i++ ?>
            <?php endforeach; ?>
          </thead>
        </table>

        <h3>DAFTAR DATA MAHASISWA</h3>
        <a class="btn btn-primary tambah" href="tambah_mahasiswa.php" role="button">Tambah Data Mahasiswa</a>
        <table class="table table-striped table-bordered border border-secondary">
            <thead>
            <tr>
              <th scope="col">NO.</th>
              <th scope="col">NIM</th>
              <th scope="col">NAMA</th>
              <th scope="col">AKSI</th>
            </tr>
            

            <?php $i=1; ?>
            <?php foreach($mhs as $rowmhs) : ?>
            <tbody class="align-baseline">
              <tr>
                <td><?= $i; ?></td>
                <td><?= $rowmhs["nim_mahasiswa"]; ?></td>
                <td><?= $rowmhs["nama_mahasiswa"]; ?></td>
                <td>
                    <a class="btn btn-warning" href="ubah_mahasiswa.php" role="button">Ubah</a>
                    <a class="btn btn-danger" href="hapus_mahasiswa.php?id=<?= $rowmhs["id"]; ?>" role="button" onclick="confirm('Apakah anda yakin untuk menghapus data ?')">Hapus</a>
                </td>
              </tr>
            </tbody>
            <?php $i++; ?>
            <?php endforeach; ?>
          </thead>
        </table>
    </body>
</div>
<?php include 'footer.php'; ?>