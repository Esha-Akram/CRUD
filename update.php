<?php
     require 'DB.php';
     if(isset($_GET['update'])){
        $name = $_GET['name'];
        $email = $_GET['email'];
        $phone_no = $_GET['phone_no'];
        $address = $_GET['address'];
        $id = $_GET['id'];

        $sql = "UPDATE `users` SET `name` = '{$name}', `email` = '{$email}', `phone_no` = '{$phone_no}',
         `address` = '{$address}' WHERE `id` = '{$id}' "; 
        if (mysqli_query($con, $sql)) {
            echo "Record updated successfully";
            header('location:view.php?update=Updated');
        } else {
            echo "Error updating record: " . mysqli_error($con);
        }
     }
     if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM users WHERE id = {$id}";
        $record = mysqli_query($con, $sql);
        $result = mysqli_fetch_array($record);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Crud Form</title>
</head>
<body>
<h1>Users Form</h1>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
                <input type="hidden" name="id" value="<?php echo $result['id']; ?>" >
                <label for="email">Email</label>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="<?php echo $result['name']; ?>" required="required" placeholder="Enter your name">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php echo $result['email']; ?>" required="required" placeholder="Enter your email">  
                <label for="phone_no">Phone No</label>
                <input type="text" id="phone_no" name="phone_no" value="<?php echo $result['phone_no']; ?>" required="required" placeholder="Enter your phone number">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" value="<?php echo $result['address']; ?>" required="required" placeholder="Enter your address">
                <input type="submit" name="update" value="Update">
        </form>
    </div>
</body>
</html>
<?php     
 } 
 ?>