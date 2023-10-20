<?php

require_once 'connection.php';

function create($data, $field_name, $table_name)
{
    global $conn;

    $result = mysqli_query(
        $conn,
        "INSERT INTO $table_name ($field_name) VALUES ($data)"
    );

    if (!$result) {
        echo mysqli_error($conn);
        return false;
    }

    return $result;
}
