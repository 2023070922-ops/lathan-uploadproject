<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Mahasiswa</title>
    <style>
        /* Warna background biru muda */
        body {
            background-color: #ADD8E6; /* Light Blue */
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;   /* Tengah horizontal */
            align-items: center;       /* Tengah vertikal */
            height: 100vh;             /* Full tinggi layar */
            margin: 0;
        }

        /* Styling tabel */
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
<br>
<br>
<table border="1">
    <tr>
        <th>kodems</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>jurusan</th>
        <th>Alamat</th>
        <th>OPSI</th>
    </tr>
    <?php
    include 'connect.php';
    $data = mysqli_query($koneksi, "select * from mahasiswa");
    while($d = mysqli_fetch_array($data)){
    ?>
        <tr>
            <td><?php echo $d['kodems']; ?></td>
            <td><?php echo $d['nama']; ?></td>
            <td><?php echo $d['NIM']; ?></td>
            <td><?php echo $d['Jurusan']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td>
                <a href="undatemenu.php?kodems=<?php echo $d['kodems']; ?>">UPDATE</a>
                <a href="delete.php?kodems=<?php echo $d['kodems']; ?>">DELETE</a>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>