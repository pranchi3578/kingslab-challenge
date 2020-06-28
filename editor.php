<?php 
session_start();
header('Content-type: text/html; charset=utf-8');
$body=$_POST['body'];
$number=$_POST['number'];


//Database connection
$conn=new mysqli('localhost','root','','editor');
if(!$conn){
    die('Connection Failed:' .mysqli_connect_error());
}
else{
    $stmt=$conn->prepare("insert into content(body)values(?)");
    $stmt->bind_param("s",$body);
    $stmt->execute();
    $_SESSION['number']=$number;
    header('location:get.php');
    $stmt->close();
    $conn->close();
}
?>