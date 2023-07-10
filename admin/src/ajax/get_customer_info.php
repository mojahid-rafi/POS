<?php
require "../database.php";
if (isset($_POST['id'])){
    $id = $con->escape_string($_POST['id']);
    $sql = "SELECT id, party_name, address_ar, phone, email FROM `customers` WHERE id =" . $id . " LIMIT 1";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $return_arr = array(
        'id' => $row['id'],
        'name' => $row['party_name'],
        'address' => $row['address_ar'],
        'phone' => $row['phone'],
        'email' => $row['email'],
    );
    echo json_encode($return_arr);
}
