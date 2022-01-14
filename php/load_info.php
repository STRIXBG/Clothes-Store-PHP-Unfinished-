<?php
$host="localhost";
$dbUsername="normalaccount";
$dbPassword="normalaccountBulgarian";
$dbName="id17150641_danielblog";

$conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

if(isset($_SESSION["username"]))
{
$username=$_SESSION["username"];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
    $row = $result -> fetch_assoc();
    $_SESSION["email"] = $row["email"];
    $_SESSION["admin"] = $row["admin"];
    
    $decodedProfileImage = $image='data:image;base64,'.$_SESSION['image'].'';
    $email = $_SESSION['email'];
    $adminlevel = $_SESSION['admin'];
}
?>