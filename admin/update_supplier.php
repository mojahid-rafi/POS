<?php
require("./src/database.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pname = $_POST['party_name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $address = $_POST['address_ar'];
    $conpersone = $_POST['contact_person'];
    $cpphone = $_POST['cp_phone'];

    $update = "UPDATE suppliers SET party_name='{$pname}', phone='{$phone}', email='{$email}', address_ar='{$address}', contact_person='{$conpersone}', cp_phone='{$cpphone}' WHERE id=$id";

    $con->query($update);
}

header("Location: http://localhost/R55/POS/admin/supplier.php");
exit;
?>
