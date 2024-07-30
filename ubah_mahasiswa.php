<?php 

include "responsi_20.01.4515.php";

$id = $_GET["id"];

$mhs = query("SELECT * FROM mahasiswa WHERE id='$id' ")[0];

if (isset($_POST["submit"])) {
    //cek apakah data berhasil diubah
    if(tambah_prodi($_POST) > 0) {
        echo "
            <script>
            alert('Data BERHASIL Diubah');
            document.location.href = 'content.php';
            </script>        
        ";
    } else {
        echo "
            <script>
            alert('Data GAGAL Diubah');
            document.location.href = 'content.php';
            </script>        
        ";
    }
}

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Ubah Data Mahasiswa</title>
  </head>
  <body>
    <section class="vh-100" style="background-color: #508bfc;">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

                <h3 class="mb-5">Ubah Data Mahasiswa</h3>
                <form action="" method="post">
                    <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="nim">NIM :</label>
                        <input type="text" id="nim" name="nim" value="<?= $mhs["nim_mahasiswa"] ?>" class="form-control form-control-lg" />
                    </div>

                    <div class="form-outline mb-4">
                        <label class="form-label" for="nama">Nama Mahasiswa :</label>
                        <input type="text" id="nama" value="<?= $mhs["nama_mahasiswa"] ?>" name="nama" class="form-control form-control-lg" />
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Ubah Data Mahasiswa</button>
                </form>

            </div>
            </div>
        </div>
        </div>
    </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>