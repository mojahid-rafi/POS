<?php require ("./src/database.php"); ?>
<?php
    
    
    $id = $_GET['id'];

    $delete = "DELETE FROM item_info WHERE id=$id";

    $con->query($delete);
    
    header("Location: http://localhost/R55/POS/admin/item_info.php");

    ?>