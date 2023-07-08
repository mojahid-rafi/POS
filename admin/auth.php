<?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }

?>

<?php require ("./src/database.php"); ?>
<?php
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pwd = $_POST['password'];

        $qry = "SELECT * FROM users WHERE email='{$email}' and user_password='{$pwd}'";
        $result = $con->query($qry);
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
             $_SESSION['user_name'] = $row['display_name'];
            header("location:dashboard.php");
        }
        else
        {
            $msg = "Invalid Email Id OR Password";
            $_SESSION['msg'] = $msg;
            header("location:login.php");
        }
    }
?>