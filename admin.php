<?php 

?>


<?php
include 'connection.php';
?>


<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="LandingPage.css">
        <!-- CSS only -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    .container
    {
        display: grid;
   grid-template-columns: 400px 400px 400px;
   margin-left:75px;
        
    }
    

</style>
 </head>
 <head>
     
<div id="navbar" class="bg-dark">
   
    <ul>
        <a href="login.php" ><li>LougOut</li></a>
      
    </ul>
</div>

 </head>
 <body>


<?php

$query = "SELECT * FROM user ";
?>
<div class="container">
<?php


try 
{
    include 'connection.php';

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $stmt = $conn->prepare($query);
    // EXECUTING THE QUERY
    $stmt->execute();

    $r = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    // FETCHING DATA FROM DATABASE
    $result = $stmt->fetchAll();
    // OUTPUT DATA OF EACH ROW

   
foreach ($result as $row)   
{

       ?>


<div class="card " style="width: 14rem;  ">
  <img src="img/a.png" class="card-img-top" alt="...">
  <div class="card-body">
  <p><?php echo "<i class='fa-solid fa-id-badge'></i> "." "."ID"." ".":"." ".$row["name"] ?></p>
  <p><?php echo "<i class='fa-solid fa-person'></i>"." "."name"." "."  : "."  ".$row["email"] ?></p>

 
 
<div class="del">
    <a href='delet.php?email=<?php echo $row["email"]?>'class="btn btn-dark"  ><i class="fa-solid fa-trash"></i></a>
    <form action="edit.php?email=<?php echo $row["email"]?>" method="post">
                    <input type="hidden" value= <?php echo $row[
                        'name'
                    ]; ?> name="email">
                    <input type="hidden" value= <?php echo $row[
                        'email'
                    ]; ?> name="name">
                    <input type="hidden" value= <?php echo $row[
                        'password'
                    ]; ?> name="password">
                  
                    
                    <input type="submit" value="Edit" name="del" class="btn btn-dark " style="width: 70px; margin-left:5px;">
                </form>
                </div>
  </div>

</div>
                
    
 <?php 


}

} catch(PDOException $e) {
// echo "Error: " . $e->getMessage();
}

?>
</div>
<?php

?>

 </body>
 <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
 </html>
<?php
    
    
   
?>