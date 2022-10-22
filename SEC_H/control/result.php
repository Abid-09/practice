<?php

if(isset($_REQUEST["submit"]))
{
   $valname=$valemail=$valpassword=$valpassword1=$valphone=$valaddress=$valgender=$valcard=$valdate=$valcity="";
    $name = $mail = $password = $password1 = $phone = $address = $gender = $nationalID = $date = $city = "";
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {

        if(empty($_POST["ename"])||(strlen($_POST["ename"])<10))
        {
            $valname="Please Enter Your Name :";
        }
        else
        {
            $name= test_input($_POST["ename"]);
            if (!preg_match("/^[a-zA-Z]*$/",$name)) 
            {
                $valname = "Only small and capital letter allowed";
            }
        }

        if(empty($_POST["email"]))
        {
            $valemail="Please Enter Your Email :";
        }
        else
        {
            $mail = test_input($_POST["email"]);
            
            
        }

        if(empty($_POST["password"]) || (strlen($_POST["password"]))<8)
        {
            $valpassword ="Please Enter a 8 bit Password";
        }
        else
        {
            $password = test_input($_POST["password"]);
        }
        if(($_POST["password"])!=($_POST["password1"]))
        {
            $valpassword1 ="Password Must be Same";
        }
        else
        {
            $password1 = test_input($_POST["password1"]);
        }

        if(empty($_POST["phone"]))
        {
            $valphone="Please Enter Your Phone Number :";
        }
        else
        {
            $phone = test_input ($_POST["phone"]);
        }
        if(empty($_POST["eaddress"]))
        {
            $valaddress="Please Enter Your Address :";
        }
        else
        {
            $address = test_input ($_POST["eaddress"]);   
        }
        if(empty($_POST["gender"]))
        {
            $valgender="Please Select One :";
        }
        else
        {
            $gender = test_input ($_POST["gender"]);   
        }
        
        if(empty($_POST["NIDcard"]))
        {
            $valcard="Please Enter Your NID Number :";
        }
        else
        {
            $nationalID = test_input ($_POST["NIDcard"]);   
        }
        if(empty($_POST["dateofbirth"]))
        {
            $valdate="Please Enter DOB:";
        }
        else
        {
            $date = test_input ($_POST["dateofbirth"]);   
        }
        if(empty($_POST["city1"]))
        {
            $valcity="Please Enter Your City :";
        }
        else
        {
            $city = test_input ($_POST["city1"]);   
        }
    }


    
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    
    }
    

echo "<h2>Your Input:</h2>";
echo "Name:".$name."<br>";
echo "Email:".$mail."<br>";
echo "Password:".$password."<br>";
echo "Phone:".$phone."<br>";
echo "Address:".$address."<br>";
echo "Gender:".$gender."<br>";
echo "National Id card Number:".$nationalID."<br>";
echo "Date of Birth :".$date."<br>";
echo "City:".$city."<br>";
}

?>
