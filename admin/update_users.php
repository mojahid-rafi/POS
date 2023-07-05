
<?php require ("./src/database.php"); ?>
<?php


    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $name = $_POST['name'];
       $dname = $_POST['dname'];
       $email = $_POST['email'];
       $role = $_POST['role'];
       $sts = $_POST['sts'];
       $password = $_POST['password'];
       $cpassword = $_POST['cpassword'];


      $update = "UPDATE users set user_name='{$name}', display_name='{$dname}', email='{$email}', role='{$role}', sts='{$sts}', user_password='{$password}', user_con_password='{$cpassword}'  where id=$id";

      $con->query($update);
    }

  header("location:http://localhost/R55/POS/admin/users.php ");
?>