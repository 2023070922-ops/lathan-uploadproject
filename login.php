<?php
session_start();
include "connect.php";
if(isset($_POST['login'])){
    $kodems = $_POST['kodems'];
    $nama = $_POST['nama'];
    $query = "select * from mahasiswa where kodems='$kodems'";
    $result = mysqli_query($koneksi,$query);
    $user = mysqli_fetch_assoc($result);
    if($user && password_verify($kodems, $user['kodems'])){
        $_SESSION['kodems'] = $user['kodems'];
        $_SESSION['nama'] = $user['nama'];
    } else {
        echo "<script>alert('kodems atau nama salah.');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #ADD8E6;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        table {
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            width: 70%;
            max-width: 800px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        a {
            display: inline-block;
            margin: 10px;
            text-decoration: none;
            color: #007BFF;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        .container {
            text-align: center;
        }
    </style>
</head>
<body>
<?php include 'navbar.php'; ?>
<a href="addmahasiswa.php">+ TAMBAH SISWA</a>
<h2>login</h2>
<div class="container">
    <br>
    <a href="menu.php">kembali</a>
    <br>
    <form method="post">
        <table>
            <tr>
                <td>username (kodems):</td>
                <td><input type="text" name="kodems"></td>
            </tr>
            <tr>
                <td>password (nama):</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="masuk"></td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>