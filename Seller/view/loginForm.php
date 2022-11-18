<?php
setcookie("LoginForm","visited",time()+14400*60);
include '../control/loginFormControl.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title> Online Food Ordering </title>

    </head>
<body>       

<form action="" method="POST" >


<div id="form" class="formcontent">
<table>

<tr>
    
    <td> <h2><b>LOGIN</b></h2> </td>
</tr>

<tr>
    <td> Username </td>
    <td> <input type="text" name="name"> </td>
</tr>
<tr>
    <td> Password </td>
    <td> <input type="password" name="password"> </td>
</tr>
<tr>
    <td> <input type="reset" name="reset"> </td>
</tr>
<tr>
    <td> <input type="submit" name="Submit"> </td>
</tr>
<tr>
    <td>Don't have an Account ?</td>
</tr>

</table>
<a href="registrationFormSeller01.php">Register Here</a>
</div>
</body>
</html>
