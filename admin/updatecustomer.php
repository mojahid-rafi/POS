
<?php require ("./src/database.php"); ?>
<?php


    if(isset($_POST['submit'])){
      
       $id = $_POST['id'];
       $party_name = $_POST['party_name'];
       $party_type = $_POST['party_type'];
       $phone = $_POST['phone'];
       $email = $_POST['email'];
       $address_ar = $_POST['address_ar'];
       $contact_person = $_POST['contact_person'];
       $cp_phone = $_POST['cp_phone'];


      $update = "UPDATE customer set party_name='{$party_name}', party_type='{$party_type}', phone='{$phone}',email='{$email}', address_ar='{$address_ar}', contact_person='{$contact_person}', cp_phone='{$cp_phone}' where id=$id";

      $con->query($update);
    }


?>