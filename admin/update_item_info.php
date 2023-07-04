
<?php require ("./src/database.php"); ?>
<?php


    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $icode = $_POST['icode'];
       $catid = $_POST['catid'];
       $unit = $_POST['unit'];
       $uprice = $_POST['uprice'];
       $lpprice = $_POST['lpprice'];
       $barcode = $_POST['barcode'];


      $update = "UPDATE item_info set item_code='{$icode}', catagory_id='{$catid}', unit='{$unit}', unit_price='{$uprice}', last_pur_price='{$lpprice}', barcode='{$barcode}' where id=$id";

      $con->query($update);
    }

  header("location:http://localhost/R55/POS/admin/item_info.php ");
?>