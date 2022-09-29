


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
<head>
    
</head>
<body>

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title"><a href="login.php">sing_up</a></h2>
                        <form  action="singup.php" method="post" novalidate >
                            <div class="form-group">
                             
                                <input type="text"  name="name"  id="name" placeholder="name"/>
                            </div>
                            <div class="form-group">
                                
                                <input type="text" name="email" id="email" placeholder="email "/>
                            </div>
                            <div class="form-group">
                               
                                <input type="password" name="password" id="pass" placeholder="password" name="password"/>
                            </div>
                            <div class="form-group">
                              
                                <input type="password" name="confirmpassword" id="re_pass" placeholder="confirm password"/>
                            </div>


                            <!-- <div class="form-group">
                              
                            <input type="hidden"  name="role" value="2">
                          </div>
<!--                             -->
                            <div class="form-group form-button">
                                <input type="submit"  name="submit" id="signup" class="form-submit" value="submit"/>
                            </div> 
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="img/signup-image.jpg" alt="sing up image"></figure>
                        
                    </div>
                </div>
            </div>
        </section>


</body>
</html>
   
<?php
echo "<br>";
echo "<br>";
// print_r($_POST);
include 'connection.php';

if(isset($_POST['submit']))
{
    if(empty($_POST['name']))
    {
    
        ?>
        <script>
          alert( "Name is requierd");
        </script>
        <?php
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {

        ?>
        <script>
          alert( "valid email is requierd");
        </script>
        <?php
    }
    if(strlen($_POST['password']) < 8)
    {

        ?>
        <script>
          alert( "password Must Be Strong");
        </script>
        <?php
    }
    if($_POST['password'] !== $_POST['confirmpassword'] )
    {
        ?>
        <script>
          alert( "password not match");
        </script>
        <?php
    }else if(empty($_POST['submit']))
    {

        ?>
        <script>
          alert( "click");
        </script>
        <?php

    }
    
}


try{
    if(isset($_POST['submit'])){
      $q = "INSERT INTO user 
      VALUES (:name1,:email,:password1)";
      
      $stmt=$conn ->prepare($q);
      $stmt->bindParam(':name1', $_REQUEST['name']);
      $stmt->bindParam(':email', $_REQUEST['email']);
      $stmt->bindParam(':password1', $_REQUEST['password']);
    //   $stmt->bindParam(':role1', $_REQUEST['role']);
   
      
      
      if($stmt->execute())
      {
        header("location:singupsuccessfully.php");
      }
    }
   
       }
       
    catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
       
        


      
  

?>
