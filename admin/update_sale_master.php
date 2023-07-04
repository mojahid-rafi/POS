
<?php require ("./src/database.php"); ?>

<?php
if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $saledate = $_POST['saledate'];
      $innumber = $_POST['innumber'];
      $pid = $_POST['pid'];
      $phone = $_POST['phone'];
      $email = $_POST['email'];
      $ptype = $_POST['ptype'];
      $total = $_POST['total'];
      $discount = $_POST['discount'];
      $payable = $_POST['payable'];
      $paid = $_POST['paid'];
      $refund = $_POST['refund'];
      $due = $_POST['due'];
      $paymode = $_POST['paymode'];


    $update = "UPDATE sale_mastr set sale_date='{$saledate}', inv_no='{$innumber}', p_id='{$pid}',phone='{$phone}',email='{$email}', product_type='{$ptype}', total='{$total}' ,discount='{$discount}' ,payable='{$payable}' ,paid='{$paid}' ,refund='{$refund}' ,due='{$due}' ,pay_mode='{$paymode}' where id=$id";

    $con->query($update);
  }

  header("Location: http://localhost/R55/POS/admin/sale_master.php");

?>