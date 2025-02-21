
<?php

include "koneksi.php";
$Id_Tamu = $koneksi->real_escape_string($_POST['Id_Tamu']); 
$Nama_Tamu = $koneksi->real_escape_string($_POST['Nama_Tamu']); 
$Tgl_Check_In = $koneksi->real_escape_string($_POST['Tgl_Check_In']);
$Tgl_Check_Out = $koneksi->real_escape_string($_POST['Tgl_Check_Out']);
$Type_Kamar = $koneksi->real_escape_string($_POST['Type_Kamar']);
$Price_Permalam = $koneksi->real_escape_string($_POST['Price_Permalam']);
$Lama_Inap = $koneksi->real_escape_string($_POST['Lama_Inap']);
$Total_Bayar = $koneksi->real_escape_string($_POST['Total_Bayar']);
$Metode_Bayar = $koneksi->real_escape_string($_POST['Metode_Bayar']);


$simpan=$koneksi->query("insert into reservasi(Id_Tamu,Nama_Tamu,Tgl_Check_In,Tgl_Check_Out,Type_Kamar,Price_Permalam,Lama_Inap,Total_Bayar,Metode_Bayar) 
                        values ('$Id_Tamu', '$Nama_Tamu', '$Tgl_Check_In', '$Tgl_Check_Out', '$Type_Kamar', '$Price_Permalam', '$Lama_Inap','$Total_Bayar', '$Metode_Bayar')");

if($simpan==true){

    header("location:reservasi.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>