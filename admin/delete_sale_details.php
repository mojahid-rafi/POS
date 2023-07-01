<?php require ("./src/database.php"); ?>
<?php
    
    
    $id = $_GET['id'];

    $delete = "DELETE FROM sale_details WHERE id=$id";

    $con->query($delete);
    
    header("Location: http://localhost/R55/POS/admin/sale_details.php");

    ?>