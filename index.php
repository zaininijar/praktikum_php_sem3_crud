<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>CRUD Mahasiswa</title>
</head>

<body style="font-family: fira code">
    <div class="wrapper">
        <h2>Sistem Pengelola Data Mahasiswa IF-5</h2>

        <?php
        include 'connection.php';

        if ($_GET["p"] == "mhs_add") {
            echo '
                <ul class="nav-link">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="?p=mhs_add">-> Tambah</a></li>
                    <li><a href="?p=mhs_edit">Edit</a></li>
                </ul>
            ';
            include "mahasiswa/mhs_add.php";
        } else if ($_GET["p"] == "mhs_edit") {
            echo '
                <ul class="nav-link">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="?p=mhs_add">Tambah</a></li>
                    <li><a href="?p=mhs_edit">-> Edit</a></li>
                </ul>
            ';
            include "mahasiswa/mhs_edit.php";
        } else if ($_GET["p"] == "mhs_delete") {
            include "mahasiswa/mhs_delete.php";
        } else {
            echo '
                <ul class="nav-link">
                    <li><a href="index.php">-> Home</a></li>
                    <li><a href="?p=mhs_add">Tambah</a></li>
                    <li><a href="?p=mhs_edit">Edit</a></li>
                </ul>
            ';
            include "mahasiswa/index.php";
        }
        ?>
    </div>
</body>

</html>