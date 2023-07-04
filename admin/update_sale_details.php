
<?php require ("./src/database.php"); ?>

<?php
if(isset($_POST['submit'])){
      $id = $_POST['id'];
      $saledate = $_POST['saledate'];
      $innumber = $_POST['innumber'];
      $itemid = $_POST['itemid'];
      $saleprice = $_POST['saleprice'];
      $quentity = $_POST['quentity'];
      $discount = $_POST['discount'];
      $totaldis = $_POST['totaldis'];
      $total = $_POST['total'];
      $vat = $_POST['vat'];


    $update = "UPDATE sale_details set sale_date='{$saledate}', inv_no='{$innumber}', item_id='{$itemid}',sale_price='{$saleprice}', qty='{$quentity}', discount='{$discount}', total_dis='{$totaldis}' ,vat='{$vat}' ,total='{$total}' where id=$id";

    $con->query($update);
  }

  header("Location: http://localhost/R55/POS/admin/sale_details.php");

?>