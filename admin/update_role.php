<?php require ("./src/database.php"); ?>

<?php

    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $role_name = $_POST['role_name'];
       $sts = $_POST['sts'];

       $update = "UPDATE roles SET role_name='{$role_name}', sts='{$sts}'";
       $con->query($update);

    }

  header("location:roles.php");
?>