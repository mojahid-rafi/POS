<?php require ("./src/database.php"); ?>
<?php
    $id = $_GET["id"];
    $dlt = "DELETE FROM roles where id=$id";
    $qry = $con->query($dlt);

    header("location:roles.php");
?>