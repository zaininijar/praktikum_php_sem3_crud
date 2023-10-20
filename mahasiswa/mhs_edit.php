<?php

require 'global_func.php';

$id = $_GET['id_mhs'];
$sql = "SELECT * FROM mahasiswa WHERE id = $id";
$result = $conn->query($sql);

if(mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_array($result);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa | Edit</title>
</head>

<body>
    <h2 class="heading-2">Edit Data Mahasiswa</h2>

    <form action="?p=mhs_update" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $data['id']; ?>">
        <div>
            <label for="nobp">No BP</label>
            <input id="nobp" type="text" name="nobp" value="<?= $data['nobp']; ?>">
        </div>
        <div>
            <label for="nama">Nama</label>
            <input id="nama" type="text" name="nama" value="<?= $data['nama']; ?>">
        </div>
        <div>
            <label for="kelas">Kelas</label>
            <select name="kelas" id="kelas" value="<?= $data['kelas']; ?>">

                <?php for($i = 1; $i <= 12; $i++): ?>
                <option <?php print($i == $data['kelas']) ? 'selected' : ''; ?> value="<?= $i; ?>">
                    IF-<?= $i; ?>
                </option>
                <?php endfor; ?>

            </select>
        </div>
        <div>
            <label for="tmp_lahir">tmp_lahir</label>
            <input id="tmp_lahir" type="text" name="tmp_lahir" value="<?= $data['tmp_lahir']; ?>">
        </div>
        <div>
            <label for="tgl_lahir">tgl_lahir</label>
            <input id="tgl_lahir" type="date" name="tgl_lahir" value="<?= $data['tgl_lahir']; ?>">
        </div>
        <div>
            <label for="jenis_kelamin">jenis_kelamin</label>
            <div class="radio-gender">
                <input id="jenis_kelamin" <?php print($data['jenis_kelamin'] == 'L') ? 'checked' : ''; ?> type="radio"
                    name="jenis_kelamin" value="L">Laki Laki
                <input id="jenis_kelamin" <?php print($data['jenis_kelamin'] == 'P') ? 'checked' : ''; ?> type="radio"
                    name="jenis_kelamin" value="P">Prempuan
            </div>
        </div>
        <div>
            <label for="alamat">alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10"><?= $data['alamat']; ?></textarea>
        </div>
        <div>
            <label for="nomor_hp">nomor_hp</label>
            <input id="nomor_hp" type="text" name="nomor_hp" value="<?= $data['nomor_hp']; ?>">
        </div>
        <div>
            <label for="email">email</label>
            <input id="email" type="email" name="email" value="<?= $data['email']; ?>">
        </div>
        <div>
            <label for="foto">foto</label>
            <input id="foto" type="file" name="foto">
        </div>
        <div>
            <label for="old-foto">old foto</label>
            <input type="hidden" name="old_foto" value="<?= $data['foto']; ?>">
            <img width="100" id="old-foto" src="../images/<?= $data['foto']; ?>" alt="">
        </div>
        <button type="submit" name="update">Update</button>
    </form>
</body>

</html>