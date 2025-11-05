<?php
$koneksi = mysqli_connect("localhost","root","mysql","atabase");
echo ('koneksi database berhasil');

if(mysqli_connect_error()){
    echo "koneksi database gagal: ".mysqli_connect_error();
}
?>