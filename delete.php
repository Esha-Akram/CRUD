<?php
     require 'DB.php';
     if(isset($_GET['id'])){
     $id = $_GET['id'];
     $sql = "DELETE FROM `users` WHERE id = {$id} ";
     $record = mysqli_query($con, $sql);
     if($record){
        header('location:view.php?delete=Deleted');
     }
   }
   else{
      echo "please set id to record";
   }
?>