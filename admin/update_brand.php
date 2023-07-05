
<?php require ("./src/database.php"); ?>
<?php


    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $bname = $_POST['bname'];


      $update = "UPDATE brands set brand_name='{$bname}' where id=$id";

      $con->query($update);
    }

  header("location:http://localhost/R55/POS/admin/brand.php ");
?>