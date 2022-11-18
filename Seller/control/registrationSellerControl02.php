<?php
session_start();


if(isset($_COOKIE["name"]))
{
    echo "Welcome Back";
}
else{
    echo "Welcome";
}

$hasError=0;
$valage=$valgender=$valphone=$valemail="";
$age=$gender=$phone=$mail="";
if(isset($_REQUEST["Submit"]))
{
if(empty($_REQUEST["age"]))
{
    echo "Age is required";
    $hasError=1;
}
else
{
    $age = test_input($_REQUEST["age"]);
                if(!preg_match("/^[0-9]*$/",$age)&& strlen($age)<11)
                    {
                    $valage="Invalid phone number";
                    }
}
if(empty($_REQUEST["gender"]))
{
    echo "Gender is required";
    $hasError=1;
}
else
{
    $gender = test_input($_REQUEST["gender"]);
                
}
if(empty($_REQUEST["contactNumber"]))
{
    echo "Contact Number is required";
    $hasError=1;
}
else
{
    $phone = test_input($_REQUEST["phone"]);
                if(!preg_match("/^[0-9]*$/",$phone)&& strlen($phone)<11)
                    {
                    $valphone="Invalid phone number";
                    }
}
if(empty($_REQUEST["email"]))
{
    echo "Email is required";
    $hasError=1;
}
else
{
    $mail = test_input($_POST["email"]);
     if (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\+_\-]+\.)+[a-z]{2,6}$/ix",$mail)) 
          {
          $valemail = "invalid email or email field is empty";
          }
}


if($hasError==0)
{
    $_SESSION["age"]=$_REQUEST["age"];
    $_SESSION["gender"]=$_REQUEST["gender"];
    $_SESSION["contactNumber"]=$_REQUEST["contactNumber"];
    $_SESSION["email"]=$_REQUEST["email"];
    
    header("Location: ../view/previewSeller.php");
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
