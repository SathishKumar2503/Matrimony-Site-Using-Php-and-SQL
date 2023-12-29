<?php
// Read the messages from the badabase
include('db_connect.php');
$sql ="SELECT * FROM `message` ORDER BY `no` DESC";
$result =$conn->query($sql);

?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CHAT BOX</title>
    <link rel="stylesheet" href="chatbox.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

</head>
<body>
    <div class="container">
        <div class="header">
            <h1>MESSAGE</h1>
            <?php
        while($row=$result->fetch_assoc())
        {
            $msg = $row['msg'];
            $name = $row['name'];
        
        
        ?>
        </div>
        <div class="body">
       
            <p class="message"><?php echo $name; ?></p>
            <p class="message user_message"><?php echo $msg; ?></p>
            <form action="" method="post">
                <input type='submit' name='reply' value='ADD TO MARRIED' id="submit"></form>
            </form>
            <br>
            <?php
        }
        ?>
        </div>

       
        
        <!-- <div class="footer">
            <form action="">
                <input type="text" name="">
                <button>SEND</button>
            </form>
        </div> -->
    </div>
</body>
</html>
<?php
if(isset($_POST['reply'])){

    //getting users details 
    $sql ="SELECT * FROM `signup` WHERE username = '$name'";
    $result =$conn->query($sql);
    $row=$result->fetch_assoc();
    $username = $row['username'];
    $email = $row['email'];
    $gender = $row['sex'];
    $phone = $row['phone'];

    $sql ="INSERT INTO `married` (`username`, `email`, `sex`,`phone`) 
    VALUES ('$username', '$email', '$gender','$phone')";
    $run =  mysqli_query($conn,$sql);
    if(!$run){
        echo "<script> alert('failed'); </script>";
    }
    else{
        echo "<script> alert('added'); </script>";

    }
    $sql ="DELETE FROM signup WHERE username = '$name' ";
    $run =  mysqli_query($conn,$sql);
    if(!$run){
        echo "<script> alert('delete failed '); </script>";
    }
    else{
        echo "<script> alert('deleted'); </script>";

    }
    $sql ="DELETE FROM `message` WHERE name = '$name' ";
    $run =  mysqli_query($conn,$sql);
    if(!$run){
        echo "<script> alert('delete msg '); </script>";
    }
    else{
        echo "<script> alert('msg deleted'); </script>";

    }
}

?>