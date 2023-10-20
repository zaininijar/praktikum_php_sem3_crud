<?php

require 'global_func.php';

if (isset($_POST['tambah'])) {

    $image_name    = $_FILES['foto']['name'];
    $file_location = $_FILES['foto']['tmp_name'];

    if (!empty($file_location)) {
        move_uploaded_file($file_location, "images/$image_name");
    }

    $nobp          = $_POST['nobp'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];
    $tmp_lahir     = $_POST['tmp_lahir'];
    $tgl_lahir     = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat        = $_POST['alamat'];
    $nomor_hp      = $_POST['nomor_hp'];
    $email         = $_POST['email'];
    $foto          = $image_name;

    $field_name = "nobp, 
                    nama, 
                    kelas, 
                    tmp_lahir, 
                    tgl_lahir, 
                    jenis_kelamin, 
                    alamat, 
                    nomor_hp, 
                    email, 
                    foto, 
                    created_at";

    $data       = "
                    '$nobp', 
                    '$nama', 
                    '$kelas', 
                    '$tmp_lahir', 
                    '$tgl_lahir', 
                    '$jenis_kelamin', 
                    '$alamat', 
                    '$nomor_hp', 
                    '$email', 
                    '$foto', 
                    NOW()";

    $table_name = "mahasiswa";

    $result = create($data, $field_name, $table_name);

    if (!$result) {
        die;
    }

    echo "Success";
    echo "<META HTTP-EQUIV='Refresh' Content='2; URL=index.php'>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa | Tambah</title>
</head>

<body>
    <h2 class="heading-2">Tambah Data Mahasiswa</h2>

    <form action="" method="POST" enctype="multipart/form-data">
        <div>
            <label for="nobp">No BP</label>
            <input id="nobp" type="text" name="nobp">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama">
        </div>
        <div>
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas">
                <option value="1">IF-1</option>
                <option value="2">IF-2</option>
                <option value="3">IF-3</option>
                <option value="4">IF-4</option>
                <option value="5">IF-5</option>
                <option value="6">IF-6</option>
            </select>
        </div>
        <div>
            <label for="tmp_lahir">tmp_lahir</label>
            <input id="tmp_lahir" type="text" name="tmp_lahir">
        </div>
        <div>
            <label for="tgl_lahir">tgl_lahir</label>
            <input id="tgl_lahir" type="date" name="tgl_lahir">
        </div>
        <div>
            <label for="jenis_kelamin">jenis_kelamin</label>
            <div class="radio-gender">
                <input id="jenis_kelamin" type="radio" name="jenis_kelamin" value="L">Laki Laki
                <input id="jenis_kelamin" type="radio" name="jenis_kelamin" value="P">Prempuan
            </div>
        </div>
        <div>
            <label for="alamat">alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
        </div>
        <div>
            <label for="nomor_hp">nomor_hp</label>
            <input id="nomor_hp" type="text" name="nomor_hp">
        </div>
        <div>
            <label for="email">email</label>
            <input id="email" type="email" name="email">
        </div>
        <div>
            <label for="foto">foto</label>
            <input id="foto" type="file" name="foto">
        </div>
        <button type="submit" name="tambah">Tambah</button>
    </form>
</body>

</html>