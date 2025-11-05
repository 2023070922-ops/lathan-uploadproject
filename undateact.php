<?php
include 'connect.php';

$kodems = $_POST['kodems'];
$nama = $_POST['nama'];
$nim = $_POST['NIM'];
$jurusan = $_POST['Jurusan'];
$alamat = $_POST['alamat'];

mysqli_query($koneksi, "
    UPDATE mahasiswa 
    SET nama='$nama', 
        NIM='$nim', 
        Jurusan='$jurusan', 
        alamat='$alamat' 
    WHERE kodems='$kodems'
");

header("location:menu.php");
?>
