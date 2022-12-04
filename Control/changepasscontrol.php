<?php
include('../Model/model.php');
$name=$gender=$age=$email=$phn=$address=$pass="";
$connection = new db();
$conobj=$connection->opencon();
$userQuery=$connection->CheckUser($_SESSION["email"],$_SESSION["password"],"patient",$conobj);
        
        if ($userQuery->num_rows > 0) 
        {
            while($row = $userQuery->fetch_assoc()) 
            {
                $name=$row["fname"];
                $gender=$row["gender"];
                $age=$row["age"];
                $email=$row["email"];
                $phn=$row["phn"];
                $address=$row["adrs"];
                $pass=$row["pass"];
            }
        }else 
        {
            echo "0 results";
        }
        

 $error="";


if (isset($_POST['changepass'])) {

    if (($_POST['oldpass']!=$pass) || ($_POST['newpass']!=$_POST['confirmpass']) ) {
        $error = "Insert valid password!";
    }
    else
    {
        $pass=$_POST["confirmpass"];
        $email = $_SESSION["email"];
        
        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->ChangePass($email, $pass,"patient", $conobj);
        $mydb->closecon($conobj);
    }
}



?>