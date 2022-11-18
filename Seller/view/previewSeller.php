<?php
include '../control/previewSellerControl.php';
?>


<!DOCTYPE html>
<html>
<head>
  <title> Online Food Ordering </title>
    </head>
<body>     

<form action="" method="POST" enctype="multipart/form-data">
  
<h1>Customer Registration</h1>

<h3> Preview</h3>

    <body>
    <table >
    Your Username is <?php echo $_SESSION["uname"]; ?> 
    Your Age is <?php echo $_SESSION["age"]; ?> 
    Your Gender is <?php echo $_SESSION["gender"]; ?> 
    Your Contact Number is <?php echo $_SESSION["contactNumber"]; ?> 
    Your Email is <?php echo $_SESSION["email"]; ?> 
  

    
    <input type="submit" name="Submit">
    </table>
    </body>

</html>