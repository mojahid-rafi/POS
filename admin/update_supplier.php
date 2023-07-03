<?php
require("./src/database.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pname = $_POST['pname'];
    $ptype = $_POST['ptype'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $conpersone = $_POST['conpersone'];
    $cpphone = $_POST['cpphone'];

    $update = "UPDATE supplier SET party_name='{$pname}', party_type='{$ptype}', phone='{$phone}', email='{$email}', address_ar='{$address}', contact_person='{$conpersone}', cp_phone='{$cpphone}' WHERE id=$id";

    $con->query($update);
}

header("Location: http://localhost/R55/POS/admin/supplier_form.php");
exit;
?>
