
<?php

include ('db_connect.php');
session_start();

if (isset($_SESSION['email'])) {


$email = $_SESSION['email'];



$query = "SELECT * FROM signup WHERE email = '$email'";
$result = mysqli_query($conn,$query);
$row =mysqli_fetch_assoc($result);

$ownuser = $_SESSION['email'];
// $owngender = $_SESSION['sex'];
$owngender =$row['sex'];





?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Profile.css">


<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!--  -->

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">


 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>





<nav class="navbar navbar-expand-lg navbar-light">
	<a href="#" class="navbar-brand">Brand<b>Name</b></a>  		
	<button type="button" class="navbar-toggler" data-toggle="collapse" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	 <!-- Collection of nav links, forms, and other content for toggling --> 
	<div id="navbarSupportedContent" class="collapse navbar-collapse justify-content-start">
		
	

			<div class="navbar-nav ml-auto action-buttons">
				<div class="nav-item dropdown">
					<!-- <a>Already a member?</a> -->
                    <a href="Logout.php" name="logout"><button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1" id="loginbtn">Logout</button></a>
					
				
				</div>
			</div>

	</div>
    
</nav>


<!-- Navbar ends -->
















<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true"><b>Home</b></button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false"><b>My Profile</b></button>
  </li>
  <!-- <li class="nav-item" role="presentation">
    <button class="nav-link" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
  </li> -->
</ul>






<div class="tab-content">

        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">






<div class="team">

<div class="container">

    <div class="section-title">

    <h2 class="text-center" >Profile</h2>

    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus tenetur architecto dicta animi</p>



    </div>

    


    <div class="row" >

    <?php
    
    
            
        $sql = "SELECT * FROM signup";
        $result = mysqli_query($conn,$sql);

        while ($row = mysqli_fetch_assoc($result)) {

            if ($row['email'] != $ownuser && $row['sex'] != $owngender) {

                // $email = $row['email'];
          

        ?>

        
    
    
    
    
    

    <div class="col-lg-6 mt-4">

        <div class="member d-flex align-items-start">

            <div class="profilepic">
                <!-- <img src="./images/pic1.jpg" class="img-fluid" alt="img1"> -->
                <?php echo "<img class='img-fluid' src='data:image;base64,{$row['profile_image']}'alt='img' /img>"; ?>
            </div>
            
            <div class="member-info">
                <h4><?php echo $row['name'] ?></h4>
                <span><?php echo $row['sub_caste'] ?></span>
                <p>
                    <li class="details"><b>Gender</b> : <?php echo $row['sex'] ?></li>
                    <li class="details"><b>Education</b>: <?php echo $row['education'] ?></li>
                    <li class="details"><b>Occupation</b> : <?php echo $row['occupation'] ?></li>
                </p>

            <!-- <div class="social">
                <a href=""><i class="fa fa-facebook"></i></a>
                <a href=""><i class="fa fa-instagram"></i></a>
                <a href=""><i class="fa fa-twitter"></i></a>
                <a href=""><i class="fa fa-facebook"></i></a>
            </div> -->
            <div class="social">

                <a href="Viewprofile.php?email=<?php echo $row['email'] ?>" class="profilebtn">View Profile</a>
                
            </div>


            </div>

        </div>
    </div>
    


<?php 


            }
}


?>






    </div>


    <div class="col-md-12">




    <h2 class="text-center">Razorpay PAyment</h2>

<form action="checkout.php" method="POST">



    <div class="col-sm-6 form-group">
        <label for="name-f">Name</label>
        <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter Your Name" ></input>
    </div>

    <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" ></input>
    </div>


    <div class="col-sm-6 form-group">
        <label for="amount">Amount</label>
        <input type="text" class="form-control" name="amount" id="amount" placeholder="Enter The Amount" ></input>
    </div>

    <div class="col-sm-3 form-group">
        <input type="submit" class="form-control btn btn-success" name="pay" id="pay" value="Pay Now"></input>
    </div>
    






</form>









</div>



<!-- Row divv -->



</div>
<!-- Container divv -->

</div>

<!-- Team divv -->

            
<br>

        </div>

        <!-- Tab divv -->







        <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <?php 
                
                $query = "SELECT * FROM signup WHERE email = '$email'";
                $result = mysqli_query($conn,$query);

                while ($row =mysqli_fetch_assoc($result)) {

                ?>


<div class="container-fluid pt-5" id="myProfile">
   
    <!-- <hr class="mt-0 mb-4"> -->
    <div class="row">
        <div class="col-xl-4">
            <!-- Profile picture card-->
            <div class="card mb-4 mb-xl-0">
                <div class="card-header">Profile Picture</div>
                <div class="card-body text-center">
                    <!-- Profile picture image-->
                    <!-- <img class="img-account-profile rounded-circle mb-2" src="./images/dhanush.jpg" alt="" width="200px" height="200px"> -->
                    <?php echo "<img class='img-account-profile rounded-circle mb-2' src='data:image;base64,{$row['profile_image']}'alt='img' width='200px' height='200px' /img>"; ?>
                    <!-- Profile picture help block-->
                    <!-- <div class="small font-italic text-muted mb-4">JPG or PNG no larger than 5 MB</div> -->
                    <!-- Profile picture upload button-->
                    <!-- <a href=""><button class="btn btn-primary" type="button">Upload new image</button></a> -->


                    <?php
                    
                    
                    echo "<form method='POST' action=''>
        <input type='submit' name='sendMessage' class='married bg-dark p-2 text-warning fw-bold border-dark border-2 rounded-pill' value='Now I Get Married'></form>";


        //for send a message
        if (isset($_POST['sendMessage'])) {
            // Default message content
            $name = $row['username'];
            $message = 'THANK YOU! for your app,and now i am getting married!!!.';
            $query = "INSERT INTO `message` (`msg`, `name`) VALUES ('$message', '$name')";
                $result = mysqli_query($conn,$query);
        
                if(!$result)
                {
                    die("Query Failed");
                }
                else
                {
                    // header('location:index.php?insert_msg=Added successfully');
                    echo "sended successfully";
                }
        }
                    
                    
                    
                    
                    ?>
                    
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <!-- Account details card-->
            <div class="card mb-4">
            <div class="card-header">Profile Details</div>


            <div class="row list container">
                <li class="col-sm-6">➤ <b>Name</b> : <?php echo $row['name'] ?></li>
                <li class="col-sm-6">➤ <b>Age</b> : <?php  echo $row['age'] ?></li>
                <li class="col-sm-6">➤ <b>D.O.B</b> : <?php echo $row['dob'] ?></li>
                <li class="col-sm-6">➤ <b>Gender</b> : <?php echo $row['sex'] ?></li>
                <li class="col-sm-6">➤ <b>Sub-Caste</b>: <?php echo $row['sub_caste'] ?></li>
                <li class="col-sm-6">➤ <b>Education</b> : <?php echo $row['education'] ?> - <?php echo $row['education_stream'] ?></li>
                <li class="col-sm-6">➤ <b>Occupation</b> : <?php echo $row['occupation'] ?></li>
                <li class="col-sm-6">➤ <b>Annual Income</b> : <?php echo $row['income'] ?></li>
                <li class="col-sm-6">➤ <b>Phone Number</b> : <?php echo $row['phone'] ?></li>
                <li class="col-sm-6">➤ <b>Father Name</b> : <?php echo $row['father_name'] ?></li>
                <li class="col-sm-6">➤ <b>Mother Name</b> : <?php echo $row['mother_name'] ?></li>
                <li class="col-sm-6">➤ <b>Family Value</b> : <?php echo $row['familyvalues'] ?></li>
                <li class="col-sm-6">➤ <b>Family Type</b> : <?php echo $row['familytype'] ?></li>
                <li class="col-sm-6">➤ <b>Family Status</b> : <?php echo $row['familystatus'] ?></li>
                <li class="col-sm-6">➤ <b>No.of Brothers</b> : <?php echo $row['brothers'] ?></li>
                <li class="col-sm-6">➤ <b>No.of Sister</b> : <?php echo $row['sisters'] ?></li>
                <li class="col-sm-6">➤ <b>Sun Sign</b> : <?php echo $row['sunsign'] ?></li>
                <li class="col-sm-6">➤ <b>Star / Nakshatra</b> : <?php echo $row['star'] ?></li>
                <li class="col-sm-6">➤ <b>Dosh</b> : <?php echo $row['dosh'] ?></li>

                
      </div>
      <a href="Update.php"><button class="btn btn-primary col-sm-12" type="button">Update My Details</button></a>

        
        
        
        
        </div>
    </div>
</div>




      





    </div>
    <!-- Tab divv -->

<?php 
}

?>
        <!-- <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">...</div>





        
        <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">...</div> -->


        

</div>





<script>
  var firstTabEl = document.querySelector('#myTab li:last-child a')
  var firstTab = new bootstrap.Tab(firstTabEl)

  firstTab.show()
</script>




<?php



}

else {
 
  echo  "<script>location.href='Homepage.php'</script>";
}




?>


</body>
</html>