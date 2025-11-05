<?php
include 'connect.php';

$kodems = $_GET['kodems'];

mysqli_query($koneksi,"delete from mahasiswa where kodems='$kodems'");

header("location:menu.php");

?>