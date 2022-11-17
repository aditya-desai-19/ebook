<?php

include("connection.php");
$email = $_POST["email"];
$pass = $_POST["pass"];

//to prevent from mysqli injection
//stripcslashes removes backslashes
$email = stripcslashes($email);
$pass = stripcslashes($pass);

//mysqli_real_escape_string escapes special character in a string
$email = mysqli_real_escape_string($conn, $email);
$pass = mysqli_real_escape_string($conn, $pass);

$sql = "select * from login where email = '$email' and password = '$pass'";
$result = mysqli_query($conn,$sql);
// $row = mysqli_fetch_array($result,MYSQLI_ASSOC);//MYSQLI_ASSOC : associative array(ie: they use named keys that you assign them)
//mysqli_num_rows: returns no of rows in result set
$count = mysqli_num_rows($result);

if($count == 1){
    echo"Login successful";
}
else{
    echo"Login failed";
}
?>