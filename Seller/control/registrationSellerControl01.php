<?php
session_start();


if(isset($_COOKIE["name"]))
{
    echo " Welcome Back !! ";
}
else{
    echo " Welcome To My Website ";
}

$hasError=0;
$valname=$valpassword="";
$name=$password="";
if(isset($_REQUEST["Submit"]))
{
if(empty($_REQUEST["name"]))
{
    echo "Username is required";
    $hasError=1;
}
else
{
    $name= test_input($_REQUEST["name"]);
     if (!preg_match("/^[A-Z]*$/",$name)) 
        {
        $valname = "Only Contain Capital Alphabet";
        }
}
if(empty($_REQUEST["password"]))
{
    echo "Password is required";
    $hasError=1;
}
// else
// {
//     $password=test_input($_REQUEST["password"])
//      if (!preg_match("#[0-9]#",$password) && strlen($password)<11)
//           {
//           $valpassword="Only number and 8 bit password";
//           }
// }




if($hasError==0)
{
    $_SESSION["uname"]=$_REQUEST["name"];
    $_SESSION["password"]=$_REQUEST["password"];
    header("location: ../view/registrationFormSeller02.php");


}

}
function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
    }

?>