<?php

    $namaDepan = "Bintang ";
    $namaTengah = "Fajar ";
    $namaBelakang = "Mauludin";

    $kotaLahir = "Bogor, ";
    $hariLahir = "18 ";
    $bulanLahir = "Mei ";
    $tahunLahir = 2002;

    $jalanAlamat = "Jl.KS Tubun, ";
    $kelAlamat = "Cibuluh,";
    $kecAlamat = "Bogor Utara, ";
    $kotaAlamat = "Kota Bogor, ";
    $kodePosAlamat = 16151;

    $sudah = true;
    $belum = false;
?>


<!DOCTYPE html>
<html style = "background-color: black;">

    <head>
    <h1 
        style=" color: white; 
                text-align:center; 
                background-color: maroon; 
                margin-left: 2em; margin-right: 2em; 
                padding-top: 2em; padding-bottom: 2em; 
                font-size: 50px; 
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';"> 

        Biodata <?php echo $namaDepan . $namaTengah . $namaBelakang; ?> 
    </h1>
    </head>

    <body>
        <h3 
        style=" color: white; 
                text-align:left; 
                background-color: maroon; 
                margin-left: 5.3em; margin-right: 5.3em; 
                padding-top: 2em; padding-bottom: 2em; 
                padding-left: 2em; padding right: 2em; 
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI';">
        Nama = <?php echo $namaDepan . $namaTengah . $namaBelakang; ?> <br/>
        Tempat Tanggal Lahir = <?php echo $kotaLahir . $hariLahir . $bulanLahir . $tahunLahir; ?> <br/>
        Alamat = <?php  echo $jalanAlamat;
                        echo "Kelurahan ". $kelAlamat;
                        echo " Kecamatan " . $kecAlamat . $kotaAlamat . "Kode Pos: " . $kodePosAlamat; ?> <br/>
        <br/>
        Apakah kamu sudah menikah? <?php var_dump($belum); ?> <br/>
        Apakah tahun lahirmu adalah tahun kabisat? <?php var_dump($tahunLahir %4 == 0); ?> <br/>
        <br/>
        Target IP semester 1 sampai 8 = 4 dongggg AAMIIIIN
    </h3>
    </body>
</html>