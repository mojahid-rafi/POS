<?php require ("./src/database.php"); ?>
<?php
    
    
    $id = $_GET['id'];

    $delete = "DELETE FROM users WHERE id=$id";

    $con->query($delete);
    
    header("Location: http://localhost/R55/POS/admin/users.php");

    ?>