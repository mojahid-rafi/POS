<?php
require "../database.php";
if (isset($_GET['term'])){
    $sql = "SELECT id,item_name FROM item_info WHERE item_name LIKE '%" . $_GET['term'] . "%'";
    $return_arr = array();
    $result = $con->query($sql);
    while ($row = $result->fetch_assoc()) {
        $return_arr[] = array(
            'label' => $row['item_name'],
            'value' => $row['item_name'],
            'id' => $row['id']
        );
    }
    echo json_encode($return_arr);
}
?>