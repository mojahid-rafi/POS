<?php
require "../database.php";
if (isset($_POST['id'])){
    $id = $con->escape_string($_POST['id']);
    $sql = "SELECT * FROM item_info WHERE id = " . $id . " LIMIT 1";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();
    $return_arr = array(
        'id' => $row['id'],
        'name' => $row['item_name'],
        'price' => $row['unit_price'],
        'sku' => $row['unit'],
    );
    echo json_encode($return_arr);
}
