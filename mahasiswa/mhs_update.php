<?php

require 'global_func.php';

if(isset($_POST['update'])) {

    $image_name    = $_FILES['foto']['name'];
    $file_location = $_FILES['foto']['tmp_name'];

    if (!empty($file_location)) {
        move_uploaded_file($file_location, "images/$image_name");
    }

    $id            = $_POST['id'];
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

    if ($image_name === '') {
        $foto = $_POST['old_foto'];
    }

    $data       = "nobp = '$nobp', 
                    nama = '$nama', 
                    kelas = '$kelas', 
                    tmp_lahir = '$tmp_lahir', 
                    tgl_lahir = '$tgl_lahir', 
                    jenis_kelamin = '$jenis_kelamin', 
                    alamat = '$alamat', 
                    nomor_hp = '$nomor_hp', 
                    email = '$email', 
                    foto = '$foto'";

    $table_name = "mahasiswa";

    $result = update($data, $table_name, $id);

    if (!$result) {
        die;
    }

    echo "<script>alert('berhasil update mahasiswa')</script>";
    echo "<META HTTP-EQUIV='Refresh' Content='2; URL=index.php'>";
}
