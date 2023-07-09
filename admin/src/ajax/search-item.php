<?php
require "../database.php";
if (isset($_GET['term'])){
    $sql = "SELECT id,item_name,barcode,unit_price FROM item_info WHERE item_name LIKE '%" . $_GET['term'] . "%' or item_code LIKE '%" . $_GET['term'] . "%'";
    $return_arr = array();
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        $return_arr[] = array(
            'label' => 'Code: '.$row['barcode'] .' / Name: '. $row['item_name'].' / Price: '.$row['unit_price'],
            'value' => $row['barcode'],
            'id' => $row['id'],
        );
    }
    echo json_encode($return_arr);
}
?>