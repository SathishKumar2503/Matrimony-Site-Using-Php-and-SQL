<?php
 include('db_connect.php');
    session_start();
 if(isset($_POST['adminlogin']))
 {
    $adminname = $_POST['adminname'];
    $password = $_POST['password'];

    $query = "SELECT * FROM `admin` WHERE `adminname` = '$adminname' AND `password` = '$password'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);

        if(is_array($row))
        {
            $_SESSION["adminname"] = $row ['adminname'];
            $_SESSION["password"] = $row ['password'];
        }
        else
        {
            echo '<script> alert("Invalid username or password"); </script>';
            echo '<script>window.location.href="adminlogin.php"; </script>';
        }
        if(isset($_SESSION["adminname"]))
        {
            header("location:Admin.php");
        }


 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <title>Admin | Login</title>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top">
            <span>Create an account?</span>
            <header>Login</header>
        </div>

        <form action="" method="post">

        <div class="input-field">
            <input type="text" class="input" name="adminname" placeholder="Username" id="">
            <i class='bx bx-user' ></i>
        </div>

        <div class="input-field">
            <input type="Password" class="input" name="password" placeholder="Password" id="">
            <i class='bx bx-lock-alt'></i>
        </div>

        <div class="input-field">
            <input type="submit" class="submit" name="adminlogin" value="Login" id="">
        </div>
        </form>
        <div class="two-col">
            <div class="one">
               <input type="checkbox" name="" id="check">
               <label for="check"> Remember Me</label>
            </div>
            <div class="two">
                <label><a href="#">Forgot password?</a></label>
            </div>
        </div>
    </div>
</div>  
</body>
</html>