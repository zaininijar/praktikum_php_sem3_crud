<?php

require_once 'connection.php';

if (isset($_GET['id_mhs'])) {
    $id = $_GET['id_mhs'];
    $sql = "DELETE FROM mahasiswa WHERE id=$id";

    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo mysqli_error($conn);
        echo "Error";
        die;
    }

    echo "Success";
    header('Location: index.php');
    // <meta http-equiv="refresh" content="0; url=index.php">
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa | Delete</title>
</head>

<body>
    <h2>Delete Data Mahasiswa</h2>
</body>

</html>