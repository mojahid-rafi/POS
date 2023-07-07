
<?php require ("./src/database.php"); ?>
<?php


    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $item_code = $_POST['icode'];
       $item_name = $_POST['iname'];
       $cat_id = $_POST['cat_id'];
       $brand_id = $_POST['brand_id'];
       $unit = $_POST['unit'];
       $uprice = $_POST['uprice'];
       $reolevel = $_POST['reolevel'];
       $lpprice = $_POST['lpprice'];
       $barcode = $_POST['barcode'];
       $sts = $_POST['sts'];
       $stmaintain = $_POST['stmaintain'];
       $opstock = $_POST['opstock'];

      $update = "UPDATE item_info set item_code='{$item_code}', item_name='{$item_name}', category_id='{$cat_id}', brand_id='{$brand_id}', unit='{$unit}', unit_price='{$uprice}', last_pur_price='{$lpprice}', barcode='{$barcode}',barcode='{$barcode}', sts='{$sts}', stock_mantain='{$stmaintain}', op_stock='{$opstock}' where id=$id";

      $con->query($update);
    }

  header("location:http://localhost/R55/POS/admin/item_info.php");
?>