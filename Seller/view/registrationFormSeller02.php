<?php
include '../control/registrationSellerControl02.php';
?>
<!DOCTYPE html>
<html>
<head>
  <title> Online Food Ordering </title>

</head>
<body>       

<form action="" method="POST" enctype="multipart/form-data">


<table>

<tr>
    
    <td> <h1>
        Seller Registration
    </h1> </td>
</tr>
<tr>
    <td> Age </td>
    <td> <input type="number" name="age"> <span><?php echo $valage;?></span></td>
</tr>
<tr>
    <td>Gender</td>
    <td> <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female <span><?php echo $valgender;?></span></td>
</tr>
<tr>
<tr>
    <td> Contact Number </td>
    <td> <input type="text" name="contactNumber"> <span><?php echo $valphone;?></span></td>
</tr>
<tr>
    <td> Email </td>
    <td> <input type="text" name="email"> <span><?php echo $valemail;?></span> </td>
</tr>

<tr>
    <td> <input type="reset" name="reset"> </td>
</tr>
<tr>
    <td> <input type="submit" name="Submit"> </td>
</tr>

</table>

<a href="loginForm.php">Login</a>
<br><br>

</body>


</html>
