<?php require ("./src/database.php"); ?>
<?php
        $id = $_GET['id'];

        $delete = "DELETE FROM brands WHERE id=$id";
    
        $con->query($delete);
        
        header("Location:brand.php");

?>