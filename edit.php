<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php include 'connection.php'; 

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="create.css">
   
   
   
</head>
<body>

        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Update Page</h2>
                        <form   method="post"  >


                            <div class="form-group">
                            
                                <input type="text" name="hosname" id="name" placeholder="Update id" value=<?php echo $_POST['name']; ?>>
                            </div>
                            <div class="form-group">
                                
        

                                <input type="text" name="hosemail"   id="email" placeholder="Update name " value=<?php echo $_POST[ 'email' ]; ?>>
                                
                            </div>
                            <div class="form-group">
                               
                      

                                <input type="text" name="hospassword"  id="pass" placeholder="Update Age" value=<?php echo $_POST[ 'password']; ?> >
                            </div>
                        
                           
                            <div class="form-group form-button">
                                <input type="submit" value="Edit" name="updatehos" id="signup" class="form-submit" />
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

<?php if (isset($_POST['updatehos'])) {

   
    $stmt = $conn->prepare("UPDATE
        user SET 
        name=:i , email=:n , password=:a 
        WHERE email=:email");
    $stmt->bindParam(':i', $name);
    $stmt->bindParam(':n', $email);
    $stmt->bindParam(':a', $password);
    
    $stmt->bindParam(':email', $_GET['email']);
    

    $name = $_POST['hosname'];
    $email = $_POST['hosemail'];
    $password = $_POST['hospassword'];
    
   
    $stmt->execute();
    header("location:admin.php");
   
}

print_r($_GET);



?>