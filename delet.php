<?php
$id=$_GET['email'];
echo $id;


include 'connection.php';

$query="DELETE FROM user WHERE email='$id'";
$conn->exec($query);
header("location:admin.php");

?>