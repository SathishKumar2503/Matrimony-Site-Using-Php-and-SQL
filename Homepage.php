
<!-- Registerd Free Form Php Code Starts -->

<?php include('db_connect.php'); ?>

<?php
// if(isset($_GET['messege']))
// {
//   echo "<h5>".$_GET['messege']."</h5>.";
// }
?>


<?php
if(isset($_POST['add_users']))
{
    $user_name = $_POST['user_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    
    

    if($c_password == $password)
    {
        // $image = $_FILES['image']['tmp_name'];
        // $name = $_FILES['image']['name'];
        // $image = file_get_contents($image);
        // $image = base64_encode($image);
        $query = "INSERT INTO `signup` (`username`, `email`, `password`) VALUES ('$user_name', '$email', '$password')";
        $result = mysqli_query($conn,$query);

        if(!$result)
        {
            // die("Query Failed".mysqli_error());
            //echo "Query error";
            echo"<script>alert('PLease Enter a Valid mailid or another mailid !');</script>";
        }
        else
        {
            // header('location:Homepage.php?insert_msg=Added successfully');
            echo"<script>alert('Registered Successfully !');</script>";
        }  
    }
    
    else
    {
        // header('location:Homepage.php?messege=please check the password');
        echo"<script>alert('Check Your password !');</script>";


    }

}
?>

<!-- Registerd Free Form Php Code Ends-->



<!-- Login Form Starts -->


<?php
    session_start();
    if(isset($_POST['login']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $select = mysqli_query($conn,"SELECT * FROM `signup` WHERE `email` = '$email' AND `password` = '$password'");
        $row = mysqli_fetch_array($select);

        if(is_array($row))
        {
            $_SESSION["email"] = $row ['email'];
            $_SESSION["password"] = $row ['password'];
        }
        else
        {
            //echo '<script type="text/javascript">';
            //echo 'alert("Invalid username or password");';
            //echo 'window.location.href="Homepage.php"';
            //echo '</scipt>';
            
            // header("location:Homepage.php");
            echo"<script>alert('Invalid email or password!');</script>";

        }
        if(isset($_SESSION["email"]))
        {
            // header("location:Welcome.php");

           $sex = $row['sex'];

           if (empty($sex)) {
            
            header("location:Welcome.php");

           }
           else {
            header("location:Profile.php");
           }
        }
    }
?>

<!-- Login Form Ends -->







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Homepage.css">


 <!-- Bootstrap -->

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!--  -->

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
  
  
  
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
   <!--  -->



    <title>Document</title>
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
					<a>Already a member?</a>
					<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1" id="loginbtn">Login</button>
				
				</div>
			</div>

	</div>
    
</nav>


<!-- Navbar ends -->





<!-- Home Background Starts -->

<div class="showcase">

        <img src="./images/bg.jpg" alt="..."></img>

    <div class="overlay">
		<h2><b>#BeChoosy with Matrimony Service for Tamils</b></h2>
		<p><b>Contact us We can help you</b></p>




		<!-- Register Free Starts -->

			<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Register Free</b></button>
		
        <!-- Endss -->
    
    </div>

</div>

 <!-- Home Background Ends   -->




 <!-- Register Form Starts  -->

		<form action="" method="post">
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"><b>Fill in this Form to Create Your Account!</b></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">

				<div class="form-group">
				<label for="name"><b>Name</b></label>
				<input type="text" name="user_name" class="form-control" required></input>
				</div>
				<!--  <div class="form-group">
				<label for="number"><b>Phone Number</b></label>
				<input type="number" name="number" class="form-control" required></input>
				</div> -->
				<div class="form-group">
				<label for="email"><b>Email</b></label>
				<input type="email" name="email" class="form-control" required></input>
				</div>
				<div class="form-group">
				<label for="password"><b>Password</b></label>
				<input type="password" name="password" class="form-control" required></input>
				</div>
				<div class="form-group">
				<label for="confirmpassword"><b>Confirm Password</b></label>
				<input type="password" name="c_password" class="form-control" required></input>
				</div>

				<div class="form-group">
				<label class="form-check-label">
				<input type="checkbox" required="required"></input> I accept the <a href="#">Terms &amp; Conditions</a></label>
				</div>
				</div>



			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelbtn">Cancel</button>
				 <input type="submit" class="btn btn-warning" name="add_users" value="Register" id="registerbtn"></input>
				<!-- <button type="submit" name="" class="btn btn-warning" id="registerbtn">Register</button> -->
                
			</div>


			</div>
		</div>
		</div>
		</form>


<!-- {/* Register Form Ends */} -->



<!-- {/* Login Form Starts */} -->


<form action="" method="post">
		<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1"><b>Login Into Your Account!</b></h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>


			<div class="modal-body">

	
			<div class="form-group">
				<label for="email"><b>Email</b></label>
				<input type="email" name="email" class="form-control" required></input>
			</div>
				
			<div class="form-group">
				<label for="password"><b>Password</b></label>
				<input type="password" name="password" class="form-control" required></input>
			</div>
				

			</div>


			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="cancelbtn">Cancel</button>
				<input type="submit" class="btn btn-warning" name="login" value="Login" id="registerbtn"></button> 
				<!-- <button type="submit" class="btn btn-warning" id="registerbtn">Login</button> -->
			</div>


			</div>
		</div>
		</div>
		</form>
	
	
	
<!--  Login Form Ends  -->
	
	
	<br>
	

<!-- Content Starts -->

<div class="container">

<div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card h-100" id="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <img width="100" height="100" src="https://img.icons8.com/ios-filled/100/login-rounded-right.png" alt="login-rounded-right" id="cardimg"/>
            <div class="card-body">
                <h5 class="card-title text-center">Sign Up</h5>
                <p class="card-text text-center">Register for free & put up your Matrimony Profile</p>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100"  id="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <img width="100" height="100" src="https://img.icons8.com/ios-filled/100/conference-call.png" alt="conference-call" id="cardimg"/>
            <div class="card-body">
                <h5 class="card-title text-center">Connect</h5>
                <p class="card-text text-center">Select & Connect with Matches you like</p>
            </div>
            </div>
        </div>

        <div class="col">
            <div class="card h-100"  id="card">
            <!-- <img src="..." class="card-img-top" alt="..."> -->
            <img width="100" height="100" src="https://img.icons8.com/ios-filled/100/speech-bubble-with-dots.png" alt="speech-bubble-with-dots" id="cardimg"/>
            <div class="card-body">
                <h5 class="card-title text-center">Interact</h5>
                <p class="card-text text-center">Become a Premium Member & Start a Conversation</p>
            </div>
            </div>
        </div>

        <!-- <div class="col">
            <div class="card h-100">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
            </div>
        </div> -->


</div>


</div>
<!-- Content Ends -->



<br>










<footer class="footer-main">
  <div class="container">
    <div class="row address-main">
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
          <div class="add-icon">
            <!-- {/* <img src="Img/footer-icon-01.png" alt="" /> */} -->
			<img width="50" height="50" src="https://img.icons8.com/ios-filled/50/address--v1.png" alt="address--v1" id="img"/>
          </div>
          <div class="add-content">
            <h5>Address</h5>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit,
			sed do eiusmod tempor incididunt ut veniam </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
          <div class="add-icon">
            <!-- {/* <img src="Img/footer-icon-02.png" alt="" /> */} -->
			<img width="50" height="50" src="https://img.icons8.com/ios-filled/50/phone.png" alt="phone"/>        
         </div>
          <div class="add-content">
            <h5>Phone</h5>
            <p>  +(91) 1234567890 <br />
            +(91) 0987654321  </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-xs-12">
        <div class="address-box clearfix">
          <div class="add-icon">
            <!-- {/* <img src="Img/footer-icon-03.png" alt="" /> */} -->
			<img width="50" height="50" src="https://img.icons8.com/ios-filled/50/new-post.png" alt="new-post"/>
          </div>
          <div class="add-content">
            <h5>Email</h5>
            <p> <a href="mailto:">example@gmail.com</a> </p>
          </div>
        </div>
      </div>
    </div>
</div>


 <!-- Copyright Footer --> 

<footer class="text-center text-white">

<div class="container p-4 pb-0">

  <div class="mb-4">

    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"
      ><i class="fa fa-facebook-f"></i
    ></a>


    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"
      ><i class="fa fa-twitter"></i
    ></a>

    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"
      ><i class="fa fa-google"></i
    ></a>

    <a class="btn btn-outline-light btn-floating m-1" href="#" role="button"
      ><i class="fa fa-instagram"></i
    ></a>

  </div>

</div>


<div class="text-center p-3" id="copyright">
Gomath Technologies © 2023 All Rights Reserved.
</div>



</footer>

</footer>


	
	
	
	
	
	

	
	




















    
</body>

<script>
   
</script>


</html>