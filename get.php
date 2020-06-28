<?php
session_start();
$host="localhost";
$user="root";
$pass="";
$db="editor";

$conn=mysqli_connect($host,$user,$pass,$db);
if(!$conn){
    die('Connection Failed:' .mysqli_connect_error());
}
else{

   

    $sql="SELECT * FROM content WHERE num='".$_SESSION['number']."'";

    $result = mysqli_query($conn, $sql);
    if(($result->num_rows)==1){
        $_SESSION['phone']=$phone;
        header('location:welcome.html');
    }
    else{
        echo "incorrect phno or password";
        exit();
    }
    $result->close();
}

$conn->close();


?>
