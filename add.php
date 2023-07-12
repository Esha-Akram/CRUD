<?php
    require_once('DB.php');
    //print_r($_POST);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone_no = $_POST['phone_no'];
    $address = $_POST['address'];

    $sql = "INSERT INTO `users` (`id`, `name`, `email`, `phone_no`, `address`) values (NULL, '{$name}', '{$email}', '{$phone_no}', '{$address}')"; 
    if(mysqli_query($con, $sql )){
        header('location:view.php');
    }
    else{
        header('location:form.php');
    }

?>