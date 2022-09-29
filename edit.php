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
                            
                                <input type="text" name="hosid" id="name" placeholder="Update id" value=<?php echo $_POST['id']; ?>>
                            </div>
                            <div class="form-group">
                                
        

                                <input type="text" name="hosname"   id="email" placeholder="Update name " value=<?php echo $_POST[ 'name' ]; ?>>
                                
                            </div>
                            <div class="form-group">
                               
                      

                                <input type="text" name="hosAge"  id="pass" placeholder="Update Age" value=<?php echo $_POST[ 'Age']; ?> >
                            </div>
                            <div class="form-group">
                              
                                
                                <input type="text" name="hosAddress" id="re_pass" placeholder="Update Address " value=<?php echo $_POST[ 'Address' ]; ?> >
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
        Patient SET 
        id=:i , name=:n , Age=:a , Address=:ad 
        WHERE id=:id");
    $stmt->bindParam(':i', $id);
    $stmt->bindParam(':n', $name);
    $stmt->bindParam(':a', $age);
    $stmt->bindParam(':ad', $Address);

    $stmt->bindParam(':id', $_GET['id']);
    

    $id = $_POST['hosid'];
    $name = $_POST['hosname'];
    $age = $_POST['hosAge'];
    $Address = $_POST['hosAddress'];
   
    $stmt->execute();
    header("location:LandingPage.php");
   
}

print_r($_GET);



?>