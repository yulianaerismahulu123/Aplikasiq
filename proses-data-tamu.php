
<?php

include "koneksi.php";
$Nama_Tamu = $koneksi->real_escape_string($_POST['Nama_Tamu']); 
$Tanggal_Lahir = $koneksi->real_escape_string($_POST['Tanggal_Lahir']); 
$Jenis_Kelamin = $koneksi->real_escape_string($_POST['Jenis_Kelamin']); 
$Alamat = $koneksi->real_escape_string($_POST['Alamat']);
$No_Telpon = $koneksi->real_escape_string($_POST['No_Telpon']);  


$simpan=$koneksi->query("insert into tamu(Nama_Tamu,Tanggal_Lahir,Jenis_Kelamin,Alamat,No_Telpon) 
                        values ('$Nama_Tamu', '$Tanggal_Lahir', '$Jenis_Kelamin','$Alamat','$No_Telpon')");

if($simpan==true){

    header("location:data-tamu.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>