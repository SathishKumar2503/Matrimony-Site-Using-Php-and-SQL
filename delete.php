<?php

include ('db_connect.php');

if(isset($_GET['email']))
{
    $email = $_GET['email'];
    // $username = $_GET['username'];
    $sql = "DELETE FROM  signup WHERE email = '$email'";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        die("query failed");
    }
    else
    {
        header('location:Admin.php');
    }
  }

?>
