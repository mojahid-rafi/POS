<?php require ("./src/database.php"); ?>
<?php
    $id = $_GET['id'];

    $delete = "DELETE FROM suppliers WHERE id=$id";

    $con->query($delete);
    
    header("Location:supplier.php");

    ?>