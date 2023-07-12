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
        <form action="add.php" method="post">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required="required" placeholder="Enter your name">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required="required" placeholder="Enter your email">  
                <label for="phone_no">Phone No</label>
                <input type="text" id="phone_no" name="phone_no" required="required" placeholder="Enter your phone number">
                <label for="address">Address</label>
                <input type="text" id="address" name="address" required="required" placeholder="Enter your address">
                <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>