<?php
/*
include_once ("koneksi.php");

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);
$cari = $_POST["cari"]; 

if (isset($_POST["cari"])) {
    $resultnpm = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm = $cari ");
} 	 	

<?php

*/

/*

include_once ("koneksi.php");

$query = "SELECT * FROM mahasiswa";

$result = mysqli_query($koneksi, $query);


if (isset($_POST["cari"])) { 
    echo "datamasuk";
    $cari = $_POST["cari"];
    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm = $cari ");
    var_dump($result);
}

*/


//var_dump($result);
//$cari = $_POST["carinpm"];

//melakukan pencarian data


/*
if($cari>13){
    echo "<script>
    alert('SUKSES: Input anda kelebihan');
    window.location.assign('index.php');
    </script>";
 }else{
        echo "<script>
        alert('SUKSES: Input anda kekurangan');
        window.location.assign('index.php');
        </script>";
}
      */

/*
        include_once ("koneksi.php");
        
        $keyword = "Tabel Data Mahasiswa";
        $query = "SELECT * FROM mahasiswa";
        $result = mysqli_query($koneksi, $query);
        
        if (isset($_POST["cari"])) {
            $cari = $_POST["cari"];
        
            if (!is_numeric($cari)) {
                echo "<script>
                alert('ERROR: NPM yang dicari harus angka');
                window.location.assign('index.php');
                </script>";
            } else {
                if (strlen($cari) < 13) {
                    echo "<script>
                    alert('ERROR: Digit NPM yang dimasukkan kurang dari 13 angka');
                    window.location.assign('index.php');
                    </script>";
                } else if (strlen($cari) > 13) {
                    echo "<script>
                    alert('ERROR: Digit NPM yang dimasukkan melebihi 13 angka');
                    window.location.assign('index.php');
                    </script>";
                } else {
                    $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE npm LIKE '%$cari%'");
                    $hasil_cari = mysqli_num_rows($result);
                    $keyword = "Ditemukan $hasil_cari Hasil Pencarian untuk NPM \"$cari\"";
                }
            }
        }
            */



include_once ("koneksi.php");

$keyword = "Tabel Data Mahasiswa";
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

if (isset($_POST["cari"])) {
    $cari = $_POST["cari"];
    if (!is_numeric($cari)) {
        echo "<script>alert('Input harus berupa angka');</script>";
    } else {
        if (strlen($cari) < 13) {
            echo "<script>alert('Digit npm kurang dari 13 angka');</script>";
        } elseif (strlen($cari) > 13) {
            echo "<script>alert('Digit npm lebih dari 13 angka');</script>";
        } else {
            if (!empty($cari)) {
                $keyword = "Hasil Pencarian untuk \"$cari\"";
            }
            $result = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE  npm LIKE '%$cari%'");
        }
    }
}

?>