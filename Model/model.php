<?php
class DB
{
    function opencon()
    {
        $DBHostname="localhost";
        $DBUsername="root";
        $DBpass="";
        $DBName="ONSS";

        $conn=new mysqli($DBHostname,$DBUsername,$DBpass,$DBName) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    function InsertData($fname, $gender, $age, $email, $phn, $address, $pass, $tablename, $conn)
    {
        $sqlstr="INSERT INTO $tablename (fname, gender, age, email, phn, adrs, pass) 
        VALUES ('$fname','$gender','$age','$email','$phn','$address','$pass')";
        if($conn->query($sqlstr)===TRUE)
        {
            header("location: ../View/login.php");
        }
        else
        {
            echo "Insertation failed ".$conn->error;
        }
    }

    function CheckUser($email,$pass,$tablename,$conn)
    {
        $result = $conn->query("SELECT * FROM  $tablename WHERE email='$email' AND pass='$pass'");
        return $result;
    }

    function UpdateUser($fname, $age, $email, $phn, $address, $tablename, $conn)
    {
        $sql = "UPDATE $tablename SET fname='$fname', age='$age', phn='$phn', adrs='$address' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        header("location: ../View/profile.php");
        $result= TRUE;
    } else {
        $result= FALSE ;
        echo failed;
    }
    return  $result;
    }

    function ChangePass($email, $pass, $tablename, $conn)
    {
        $sql = "UPDATE $tablename SET pass='$pass' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        header("location: ../View/home.php");
        $result= TRUE;
    } else {
        $result= FALSE ;
        echo failed;
    }
    return  $result;
    }


    function Search($search,$tablename,$conn){
        $result = $conn->query("SELECT * FROM  $tablename WHERE nname LIKE '{$search}%' OR hospital LIKE '{$search}%'");
        return $result;
    }

    function closecon($conn)
    {
        $conn->close();
    }
}
?>