<?php
    require 'DB.php';
    $sql = "SELECT * FROM users";
    $record = mysqli_query($con, $sql);
    if(!empty($_GET['delete'])){
        echo "<h2>Record Deleted<h2>";
    };
    if(!empty($_GET['update'])){
        echo "<h2>Record Updated<h2>";
    };
?>
<tabel>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<button><a href="form.php">Add Record</a></button>
<h1>Users Table</h1>
<table id="users">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone No</th>
        <th>Address</th>
        <th>Action</th>
    </tr>
<?php
    $num = 0;
    while ($result = mysqli_fetch_array($record)){
        $num++;
  ?>
 <tr>
  <td><?php echo $num?></td>
  <td><?php echo $result['name']; ?></td>
  <td><?php echo $result['email']; ?></td>
  <td><?php echo $result['phone_no']; ?></td>
  <td><?php echo $result['address']; ?></td>
  <td><a href="update.php?id=<?php echo $result['id']; ?>">Edit / </a>
  <a href="delete.php?id=<?php echo $result['id']; ?>">Delete</a></td>
</tr> 
<?php
}
?>
</table>
</body>
</html>
