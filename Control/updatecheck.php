<?php
include "../../Model/model.php";
?>
<?php

if(isset($_POST["customerupdate"]))
{
    
    if(!empty($_POST["customername"]) || isset($_post["customergender"]) || !empty($_POST["customeraddress"]))
    {
        $name=$_POST["customername"];
        $gender=$_POST["customergender"];
        $address=$_POST["customeraddress"];
        $email = $_SESSION["customeremail"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->UpdateUser($name, $gender, $email, $address,"customer", $conobj);
        $mydb->closecon($conobj);
        
    }
}

?>