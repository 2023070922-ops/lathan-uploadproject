<?php
include "connect.php";

$kodems = $_POST['kodems'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
mysqli_query($koneksi,"insert into mahasiswa(kodems,nama,nim,jurusan,alamat) values('$kodems','$nama','$nim','$jurusan','$alamat')");

header("location:menu.php");

?>