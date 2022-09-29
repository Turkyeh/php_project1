

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
 

<!-- <h1>login</h1>
<form  method="post" novalidate>
  <label> email:</label><br>
  <input type="text" name="email"  ><br><br>
  <label >password:</label><br>
  <input type="password"  name="password"><br><br>
  <input type="submit" value="Submit" name="login">

</form>  -->


  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>


<!-- pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST");
include 'connection.php';

 
// $sql="SELECT * FROM user WHERE email=$email";
// $sql->exec();
// echo $sql;

if (isset($_POST['login'])) {
  $email=$_POST['email'];
  $password=$_POST['password'];
  $stmt = $conn->query("SELECT * FROM user WHERE email='$email' and password='$password' ");

  $user = $stmt->fetchAll();
  // print_r($user);
  // header("Location: welcome.php");
  if (count($user) > 0) {
      if ($user[0]['role'] == 1) {
          header("Location: admin.php");
      } elseif ($user[0]['role'] == 2) {
          header("Location: singupsuccessfully.php");
      }
  }else
  {
    // die("The Email Or Password Is Not Correct");
    ?>
    <script>
      alert( "The Email Or Password Is Not Correct");
    </script>
    <?php
    }
}


// EXECUTING THE QUERY

?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/singup.css">
   <style>
     a
    {
        text-decoration: none;
        color:black;
    }
   </style>
   
   
</head>
<body>

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title"><a href="singup.php">Log_in</a></h2>
                        <form method="post" novalidate >
                          
                            <div class="form-group">
                                
                                <input type="text" name="email" id="email" placeholder="email "/>
                            </div>
                            <div class="form-group">
                               
                                <input type="password" name="password" id="pass" placeholder="password" name="password"/>
                            </div>
         
                            <div class="form-group form-button">
                                <input type="submit"  name="login" id="signup" class="form-submit" value="submit"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/signin-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>


</body>
</html>