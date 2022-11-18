<?php
include '../control/registrationSellerControl01.php';
?>
<!DOCTYPE html>
<html>
<head>

  <title> Online Food Ordering  </title>

</head>

<body>       

<form action="" method="POST" enctype="multipart/form-data">
<table>

<tr>
    
    <td> 
        <h1>Seller Registration</h1> 
</td>
</tr>
<tr>
    <td> Username </td>
    <td> <input type="text" name="name"> <span><?php echo $valname;?></td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"><span><?php echo $valpassword;?> </td>
</tr>

<tr>
    <td> <input type="reset" name="reset"> </td>
</tr>
<tr>
    <td><a href="registrationFormSeller02.php"><input type="submit" name="Submit"></a>  </td>
</tr>
</table>

<a href="loginForm.php"> Login </a>
<br><br>

</body>


</html>
