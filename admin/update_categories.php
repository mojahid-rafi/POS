
<?php require ("./src/database.php"); ?>
<?php


    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $cat_name = $_POST['cat_name'];
       $dis = $_POST['dis'];


      $update = "UPDATE categories set name='{$cat_name}', discription='{$dis}'  where id=$id";

      $con->query($update);
    }

  header("location:http://localhost/R55/POS/admin/categories.php ");
?>