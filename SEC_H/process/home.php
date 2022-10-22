<?php include "../control/result.php"?>
<!DOCTYPE html>
<html>
    <head><h1>Registration from for Manager</h1></head>

<body>
<form action="../control/result.php" method="POST">


<table align="center">

<tr>
    <td>Name</td>
    <td><input type="text" placeholder="Name please" name="ename" > </td>
</tr>

<tr>
    <td>Email</td>
    <td><input type="email" placeholder="Email" name="email"> </td>
</tr>
<tr>
    <td>Password</td>
    <td><input type="password" placeholder="password" name="password"></td>

</tr>
<tr>
    <td>Confirm Password</td>
    <td><input type="password" placeholder="password" name="password1"></td>

</tr>

<tr>
    <td>Phone Number</td>
    <td><input type="tel" id="phone" name="phone"></td>
</tr>
<tr>
    <td>Address</td>
    <td><textarea name= "address" cols="20" rows="5" name="eaddress"></textarea></td>

    
</tr>

<tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="other">Other</td>
</tr>
<tr>    
    <td>NID Number</td>
    <td><input type ="number" name="NIDcard" maxlength="10" ></td>
</tr>
<tr>
    <td>Date Of Birth</td>
    <td><input type ="date" name="dateofbirth"></td>
</tr>

<tr>
    <td>City</td>
    <td><select name="city1" id="">
        <option value="Dhaka">Dhaka</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Barisal">Barisal</option>
    </td>
</tr>
<tr>
<tr>
    <td></td>
    <td><input type = "submit" name="submit" value="Submit">
    <input type="reset"></td>
</tr>
</tr>
</table>
</form>

</body>

</html>