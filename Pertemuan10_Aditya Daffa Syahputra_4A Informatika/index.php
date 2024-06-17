<?php
/*
$mulai = 1;
$x = 10;

for ($i=$mulai; $i<=$x; $i++){
    if ($i %2 == 0){
        echo $i ."<br>";
    }
}
*/

$angka = [1,2,3,4,5];

function jumlah($angka){
    $total = 0;
    for($i=0; $i<=$angka; $i++){
        $total += $angka[$i] + $angka[$i+1];
    }
    echo $total;

    
}

jumlah($angka);



