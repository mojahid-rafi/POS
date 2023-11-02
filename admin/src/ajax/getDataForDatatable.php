<?php
require "../database.php";
$sql = "SELECT * FROM brands";
$result = $con->query($sql);
$row = $result->fetch_assoc();
$return_arr = array(
    'id' => $row['id'],
    'name' => $row['name']
);
echo json_encode($return_arr);