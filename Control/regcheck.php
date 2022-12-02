<?php

include "../Model/model.php";
?>
<?php

if(isset($_POST["signup"]))
{
        $name=$_POST["name"];
        $gender=$_POST["gender"];
        $age=$_POST["age"];
        $email=$_POST["email"];
        $address=$_POST["address"];
        $phn=$_POST["phone"];
        $pass=$_POST["pass"];

        $mydb = new DB();
        $conobj=$mydb->opencon();
        $mydb->InsertData($name, $gender, $age, $email, $phn, $address, $pass,"patient", $conobj);
        $mydb->closecon($conobj);
}

?>