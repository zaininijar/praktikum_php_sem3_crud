<?php

include 'connection.php';

$sql = "SELECT * FROM mahasiswa ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
</head>

<body>
    <h2>Data Mahasiswa</h2>
    <br>
    <table border="1" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Personal</th>
                <th>Temp. Lahir</th>
                <th>Tgl Lahir</th>
                <th>JK</th>
                <th>Alamat</th>
                <th>Nomor HP</th>
                <th>Email</th>
                <th>Foto</th>
                <th>Act</th>
            </tr>
        </thead>
        <tbody style="font-size:smaller; text-align: center;">
            <?php if ($result->num_rows > 0) : ?>
                <?php $no = 1; ?>
                <?php while ($row = $result->fetch_assoc()) : ?>
                    <tr>
                        <th><?php echo $no ?></th>
                        <td style="text-align: left;">
                            <div style="white-space: nowrap;">No BP :<?php echo $row['nobp'] ?></div>
                            <div style="white-space: nowrap;">Nama :<?php echo $row['nama'] ?></div>
                            <div style="white-space: nowrap;">Kelas :<?php echo 'IF-' . $row['kelas'] ?></div>
                        </td>
                        <td><?php echo $row['tmp_lahir'] ?></td>
                        <td><?php echo date('d, M, Y', $row['tgl_lahir']) ?></td>
                        <td><?php echo $row['jenis_kelamin'] ?></td>
                        <td><?php echo $row['alamat'] ?></td>
                        <td><?php echo $row['nomor_hp'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><img height="50" src="images/<?php echo $row['foto'] ?>" alt=""></td>
                        <td><a href="?p=mhs_delete&id_mhs=<?php echo $row['id'] ?>">Delete</a></td>
                    </tr>
                    <?php $no++ ?>
                <?php endwhile; ?>
            <?php endif; ?>
        </tbody>
    </table>
</body>

</html>