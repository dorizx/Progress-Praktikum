<?php
include_once ("koneksi.php");
include_once ("index.php");

if (isset($_POST["cari"])) {
    $cari = $_POST['cari'];
    $resultnpm = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm LIKE '%$cari%' ");
} 	 	

