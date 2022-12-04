<?php
include "../Model/model.php";



if(isset($_POST["update"]))
{
    
    if(!empty($_POST["name"]) || !empty($_POST["age"]) || !empty($_POST["phone"]) || !empty($_POST["address"]))
    {

        $name=$_POST["name"];
        $age=$_POST["age"];
        $phn=$_POST["phone"];
        $address=$_POST["address"];
        $email = $_SESSION["email"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->UpdateUser($name, $age, $email, $phn, $address,"patient", $conobj);
        $mydb->closecon($conobj);
        
    }
}

?>