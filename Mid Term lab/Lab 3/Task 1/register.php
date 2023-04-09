<?php

$name = $_REQUEST["name"];
$uname = $_REQUEST["uname"];
$email =$_REQUEST["email"];
$pass1= $_REQUEST["pass"];
$pass2=$_REQUEST["cpass"];
$gender=$_REQUEST["gender"];
$dob=$_REQUEST["dob"];
   
    if($name=="")
    {
        echo "Please Enter your Name !!" ."\n" ;
        


    }

    elseif($uname=="")
    {
        echo "Please Enter User Name !!";
    }

    elseif($email=="")
    {
        echo "Please Enter User Email !!";
    }
    
    elseif($gender== "")
    {
        echo "Please select your Gender !!" ;
    }
    
    elseif($dob== "")
    {
        echo" Please select your Date of Birth";
    }
    elseif($pass1 == "" && $pass2 == "")
    {
        echo "Please enter Password !";
    }
    elseif($pass1 ==  $pass2 )
    {
        $pass= $pass1 ;

    $alldetailsarr= array($name,$uname,$email,$pass,$gender,$dob);


    $details= $alldetailsarr[0] . "," .  $alldetailsarr[1] . "," . $alldetailsarr[2] . "," . $alldetailsarr[3] . "," . $alldetailsarr[4] . ",".
    $alldetailsarr[5] . "\r\n" ;
    

    $file=fopen ('userinfo.txt','a');
    fwrite($file,$details);
    fclose($file);
    echo"<center>";
    echo "Register Successfully" ;
    echo '<br><br><a href="login.php">Login Now</a>';
    echo "</center>";

    }
    else
    {
        echo "password not matched !!";
    }


?>