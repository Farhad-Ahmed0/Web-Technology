<?php

   

 
    $unameErr=$passErr="";
    $uname=$pass="";
    $error=$message=$message2="";
  if($_SERVER["REQUEST_METHOD"]=="POST")
  {
    if(empty($_POST["uname"]))
    {
      $unameErr="Username is required";
    }
    else
    {
      $uname=$_POST["uname"];
      if(strlen($_POST["uname"])<2)
      {
        $unameErr="User Name must contain at least two (2) characters";
      }
    }
    if(empty($_POST["pass"]))
    {
      $passErr="Password is required";

    }
    else
    {
      $pass=$_POST["pass"];
       if(strlen($_POST["pass"])<8)
      {
        $passErr="Password must not be less than eight (8) characters";
        
      }
        else if(!preg_match("/\W/",$pass))
      {
        $passErr="Password must contain at least one of the special characters";
        
      }
    }
    
    if (!empty($_POST['remember'])) {
  setcookie("uname", $_POST['uname'], time()+10);
  setcookie("pass", $_POST['pass'], time()+10);
  $message= "cookie setup successfully!";
}else{
  setcookie("uname", "");
  setcookie("pass", "");
  $error= "cookie removed successfully!";
}
    
}
if(!empty($uname))
{
  $servername = "localhost";
$username = "root";
$password = "";
$dbname = "foodie";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="SELECT * FROM `registration` WHERE `username`= ?;";
$result= $conn->query($sql);
if($result->num_rows>0)
{
  $unamedb=$uname;
  $passdb=$pass;

}
else
{
  $unamedb="";
  $passdb="";
}
$conn->close();

}
session_start();
if(isset($_POST['uname']))
{
  if($uname==$unamedb && $pass==$passdb)
  {
    $_SESSION['uname']=$unamedb;
    $_SESSION['pass']=$passdb;
    header("location:../view/Dashboard.php");
  }
  else
  {
    $message2="Username or password invalid";
  }
}
?>