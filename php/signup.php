<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "mydb";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    die("Connection failed");
}

$email = $_POST["email"];
$pass = $_POST["pass"];


// INSERT INTO `login` (`email`, `password`) VALUES ('adityadesai182838@gmail.com', 'Aditya*1');
$sql = "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$pass');";

if(mysqli_query($conn, $sql))
{
    echo"<br>Signup successful";
}
else
{
    echo"<br>Error";
}

mysqli_close($conn);

?>