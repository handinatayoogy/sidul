<?php 
session_start();
?>

<div class="card" style="width: 18rem;">
  <div class="card-header">
    <h4>Profile Mahasiswa</h4>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">NIM : <?= $_SESSION["nim"]; ?></li>
    <li class="list-group-item">Nama : <?= $_SESSION["nama"]; ?></li>
    <li class="list-group-item">Konsentrasi : Pemrograman Web</li>
  </ul>
</div>