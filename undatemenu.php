<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update database</title>
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

        .container {
            background-color: white;
            padding: 30px 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            width: 400px;
            text-align: center;
        }

        h2 {
            color: #007BFF;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="submit"],
        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover,
        button:hover {
            background-color: #0056b3;
        }

        a {
            display: inline-block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <?php include 'navbar.php'; ?>
</head>
<body>
    <h2>update data mahasiswa</h2>
    <br>
    <a href="menu.php">kembali</a>
    <br>
    <a href="undatemenu.php?kodems=<?php echo $d['kodems']; ?>"></a>
    <?php
    include 'connect.php';
    $kodems = $_GET['kodems'];
    $data = mysqli_query($koneksi,"select * from mahasiswa where kodems='$kodems'");
    while($d  = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="undateact.php">
            <table>
                <tr>
                    <td>nama</td>
                    <td>
                        <input type="hidden" name="kodems" value="<?php echo $d['kodems']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>nim</td>
                    <td>
                        <input type="number" name="NIM" value="<?php echo $d['NIM']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>jurusan</td>
                    <td>
                        <input type="text" name="Jurusan" value="<?php echo $d['Jurusan']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
                <td>
                    <input type="hidden" name="kodems" value="<?php echo $d['kodems']; ?>">
                </td>
        </form>
        <?php
    }
    ?>
</body>
</html>