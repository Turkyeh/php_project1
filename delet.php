<?php
$id=$_GET['id'];
echo $id;


include 'connection.php';

$query="DELETE FROM Patient WHERE id=$id";
$conn->exec($query);
header("location:LandingPage.php");

?>