<?php
$dbServername='localhost';
$dbUsername='root';
$dbPwd='';
$dbName='landingpage';
$conn = mysqli_connect($dbServername , $dbUsername ,$dbPwd,$dbName);
// *******



// *******
$name= $_POST['name'];
$email= $_POST['email'];

$sql= " INSERT INTO subscribers (FullName ,Email) 
VALUES ('$name' ,'$email') ;";
mysqli_query($conn ,$sql);
// header('location: success.php')
?>


