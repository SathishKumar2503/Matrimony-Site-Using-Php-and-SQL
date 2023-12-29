<?php 

include ('db_connect.php');
session_start();
if (isset($_SESSION['email'])){
  $email = $_SESSION['email'];

  $query = "SELECT * FROM signup WHERE email = '$email'";
  $result = mysqli_query($conn,$query);
  $row =mysqli_fetch_assoc($result);

  // if ($result) {
  //   echo "<script>alert('run')</script>";
  // }
  // else {
  //   echo "<script>alert('notrun')</script>";

  // }
  
?>



<?php 

    if(isset($_POST['register_details']))
    {


      $name = $_POST['name'];
      $sex = $_POST['sex'];
      $religion = $_POST['religion'];
      $age = $_POST['age'];
      $caste = $_POST['caste'];
      $sub_caste = $_POST['sub_caste'];
      $dob = $_POST['dob'];
      $state = $_POST['state'];
      $district = $_POST['district'];
      $postal = $_POST['postal'];
      $country = $_POST['country'];
      $cod = $_POST['cod'];
      $phone = $_POST['phone'];
      $father_name = $_POST['father_name'];
      $mother_name = $_POST['mother_name'];
      $familyvalues = $_POST['familyvalues'];
      $familytype = $_POST['familytype'];
      $familystatus = $_POST['familystatus'];
      $brothers = $_POST['brothers'];
      $sisters = $_POST['sisters'];
      $sunsign = $_POST['sunsign'];
      $star = $_POST['star'];
      $dosh = $_POST['dosh'];
      $education = $_POST['education'];
      $education_stream = $_POST['education_stream'];
      $employ = $_POST['employ'];
      $occupation = $_POST['occupation'];
      $income = $_POST['income'];



      // profile image php ;;

      $profile_image = $_FILES['profile_image']['tmp_name'];
      $profile_name = $_FILES['profile_image']['name'];
      $profile_image =  file_get_contents($profile_image);
      $profile_image = base64_encode($profile_image);

      // images php ;;

      $image_1 = $_FILES['image_1']['tmp_name'];
      $image_name1 = $_FILES['image_1']['name'];
      $image_1 =  file_get_contents($image_1);
      $image_1 = base64_encode($image_1);


      $image_2 = $_FILES['image_2']['tmp_name'];
      $image_name2 = $_FILES['image_2']['name'];
      $image_2 =  file_get_contents($image_2);
      $image_2 = base64_encode($image_2);


      $image_3 = $_FILES['image_3']['tmp_name'];
      $image_name3 = $_FILES['image_3']['name'];
      $image_3 =  file_get_contents($image_3);
      $image_3 = base64_encode($image_3);


      $image_4 = $_FILES['image_4']['tmp_name'];
      $image_name4 = $_FILES['image_4']['name'];
      $image_4 =  file_get_contents($image_4);
      $image_4 = base64_encode($image_4);



      $image_5 = $_FILES['image_5']['tmp_name'];
      $image_name5 = $_FILES['image_5']['name'];
      $image_5 =  file_get_contents($image_5);
      $image_5 = base64_encode($image_5);


      $image_6 = $_FILES['image_6']['tmp_name'];
      $image_name6 = $_FILES['image_6']['name'];
      $image_6 =  file_get_contents($image_6);
      $image_6 = base64_encode($image_6);

     
      // ;;


      $query = "UPDATE  `signup` SET  `name` ='$name',`sex`='$sex',`religion`='$religion',`age`='$age',`caste`='$caste',`sub_caste`='$sub_caste',`dob`='$dob',`state`='$state',`district`='$district',`postal`='$postal',`country`='$country',`cod`='$cod',`phone`='$phone',`father_name`='$father_name',`mother_name`='$mother_name',`familyvalues`='$familyvalues',`familytype`='$familytype',`familystatus`='$familystatus',`brothers`='$brothers',`sisters`='$sisters',`sunsign`='$sunsign',`star`='$star',`dosh`='$dosh',`education`='$education',`education_stream`='$education_stream',`employ`='$employ',`occupation`='$occupation',`income`='$income',`profile_name`='$profile_name',`profile_image`='$profile_image',`image_name1`='$image_name1', `image_1`= '$image_1',`image_name2`='$image_name2', `image_2`= '$image_2',`image_name3`='$image_name3', `image_3`= '$image_3',`image_name4`='$image_name4', `image_4`= '$image_4',`image_name5`='$image_name5', `image_5`= '$image_5',`image_name6`='$image_name6', `image_6`= '$image_6' WHERE email = '$email'";

      $result = mysqli_query($conn,$query);

      if (!$result) {

        
          echo"<script>alert('Registered failed !');</script>";
       
      }

      else {
        // echo"<script>alert('Registered Successfully !');</script>";
        header("location:Profile.php");
      }

    }

    
   
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="Welcome.css">

 <!-- Bootstrap -->

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!--  -->


   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Varela+Round">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  

  <!-- J query -->

  <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js" > </script> 


  <!--  -->

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
					<a>Back to Home?</a>

          <a href="Logout.php" name="logout"> <button type="submit" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal1" id="loginbtn">Logout</button>
          </a>
         
				
				</div>
			</div>

	</div>
    
</nav>


<!-- Navbar ends -->














<h1 class="text-center">Welcome <?php echo $row['username'];  ?></h1>


























<div class="container">




<div class="card mb-3" id="card" >
  <div class="row">

    <div class="col-md-6">
      <div class="card-body">
        <p class="card-text" id="iconpara">❝A good marriage is one which allows for change and growth in the individuals and in the way they express their love...❞</p>
      </div>
    </div>

    <div class="col-md-6">
    <img src="./images/couple.gif" id="icon" class="img-fluid rounded-start" alt="...">
    </div>

  

  </div>
</div>



</div>




<div class="container mt-3">
  <form action="" method="post" enctype="multipart/form-data" >
    <div class="row  box8">
      
      <div class="col-sm-12 mx-t3 mb-4">
        <h2 class="text-center">General Details</h2>
      </div>

      <div class="col-sm-6 form-group">
        <label for="name-f">Name</label>
        <input type="text" class="form-control" name="name" id="name-f" placeholder="Enter Your Name" ></input>
      </div>

      <div class="col-sm-6 form-group">
        <label for="sex">Gender</label>
        <select id="sex" name="sex" class="form-control browser-default custom-select" >
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="religion">Religion</label>
        <select id="religion" name="religion" class="form-control browser-default custom-select" >
          <option value="">Select a Religion</option>
          <option value="Hindu">Hindu</option>
          <option value="Muslim">Muslim</option>
          <option value="Christian">Christian</option>
          <option value="No Religious">No Religious</option>
        </select>
      </div>


      <div class="col-sm-6 form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" name="age" id="age" placeholder="Enter Your Age" >
      </div>


      <div class="col-sm-6 form-group">
        <label for="caste">Caste</label>
        <select id="caste" name="caste" class="form-control browser-default custom-select">
        <option value="" hidden>Please Select</option>
          <option value="Caste 1">Caste 1</option>
          <option value="Caste 2">Caste 2</option>
          <option value="Caste 3">Caste 3</option>
          <option value="Caste 4">Caste 4</option>
          <option value="Caste 5">Caste 5</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="sub_caste">Sub - Caste</label>
        <select id="sub_caste" name="sub_caste" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="Sub-Caste 1">Sub-Caste 1</option>
          <option value="Sub-Caste 1">Sub-Caste 2</option>
          <option value="Sub-Caste 3">Sub-Caste 3</option>
          <option value="Sub-Caste 4">Sub-Caste 4</option>
          <option value="Sub-Caste 5">Sub-Caste 5</option>
          <option value="Sub-Caste 6">Sub-Caste 6</option>
          <option value="Sub-Caste 7">Sub-Caste 7</option>
         
        </select>
      </div>

      <!-- <div class="col-sm-6 form-group">
        <label for="name-l">Last name</label>
        <input type="text" class="form-control" name="lname" id="name-l" placeholder="Enter your last name." ></input>
      </div> -->

      <div class="col-sm-6 form-group">
        <label for="Date">Date Of Birth</label>
        <input type="Date" name="dob" class="form-control" id="Date" placeholder="" ></input>
      </div>

      <!-- <div class="col-sm-6 form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" ></input>
      </div> -->

      <div class="col-sm-6 form-group">
        <label for="image">Profile Image</label>
        <input type="file" class="form-control" name="profile_image" id="image" placeholder="dd"></input>
        <br>
      </div>



      <!-- <div class="col-sm-6 form-group">
        <label for="address-1">Address Line-1</label>
        <input type="address" class="form-control" name="Locality" id="address-1" placeholder="Locality/House/Street no." ></input>
      </div>
      <div class="col-sm-6 form-group">
        <label for="address-2">Address Line-2</label>
        <input type="address" class="form-control" name="address" id="address-2" placeholder="Village/City Name." ></input>
      </div>  -->

      <div class="col-sm-6 form-group">
        <label for="State">State</label>
        <input type="address" class="form-control" name="state" id="State" placeholder="Enter Your State Name" ></input>
      </div>
      

      <div class="col-sm-4 form-group">
        <label for="district">District</label>
        <input type="address" class="form-control" name="district" id="district" placeholder="Enter Your District Name" ></input>
      </div>

      <div class="col-sm-2 form-group">
        <label for="zip">Postal-Code</label>
        <input type="zip" class="form-control" name="postal" id="zip" placeholder="Postal-Code" ></input>
      </div>


      <div class="col-sm-6 form-group">
        <label for="country">Country</label>
        <select class="form-control custom-select browser-default" id="country" name="country" >
          <option value="India">India</option>
        </select>
      </div>
      

      <div class="col-sm-2 form-group">
        <label for="cod">Country code</label>
        <select class="form-control browser-default custom-select" name="cod" id="cod">

          <option value="" hidden>Please Select</option>
          <option data-countryCode="IN" value="91">India (+91)</option>

        </select>
      </div>

      <div class="col-sm-4 form-group">
        <label for="tel">Phone</label>
        <input type="tel" name="phone" class="form-control" id="tel" placeholder="Enter Your Contact Number" ></input>
      </div>

      <h2 class="text-center">Family Details</h2>

      <div class="col-sm-6 form-group">
        <label for="name-f">Father Name</label>
        <input type="text" class="form-control" name="father_name" id="name-f" placeholder="Enter Your Father Name" ></input>
      </div>
      
      <div class="col-sm-6 form-group">
        <label for="name-f">Mother Name</label>
        <input type="text" class="form-control" name="mother_name" id="name-f" placeholder="Enter Your Mother Name" ></input>
      </div>
     
      <div class="col-sm-6 form-group">
        <label for="familyvalues">Family Values</label>
        <select id="familyvalues" name="familyvalues" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="Orthodox">Orthodox</option>
          <option value="Liberal">Liberal</option>
          <option value="Traditional">Traditional</option>
          <option value="Modern">Modern</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="familytype">Family Type</label>
        <select id="familytype" name="familytype" class="form-cotrol browser-default custom-select" >
        <option value="" hidden>Please Select</option>
        <option value="joint">Joint</option>
        <option value="nuclear">Nuclear</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="familystatus">Family Status</label>
        <select id="familystatus" name="familystatus" class="form-cotrol browser-default custom-select" >
        <option value="" hidden>Please Select</option>
        <option value="Lower Middle Class">Lower Middle Class</option>
        <option value="Middle Class">Middle Class</option>
        <option value="Upper Middle Class">Upper Middle Class</option>
        <option value="Rich">Rich</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="brothers">No.of Brothers</label>
        <select id="brothers" name="brothers" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="sisters">No.of Sisters</label>
        <select id="sisters" name="sisters" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
        </select>
      </div>

      

      <h2 class="text-center">Horoscope Information</h2>
      <div class="col-sm-6 form-group">
        <label for="sunsign">Sun Sign / Raasi</label>
        <select id="sunsign" name="sunsign" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="Aries">Aries</option>
          <option value="Taurus">Taurus</option>
          <option value="Gemini">Gemini</option>
          <option value="Cancer">Cancer</option>
          <option value="Leo">Leo</option>
          <option value="Virgo">Virgo</option>
          <option value="Libra">Libra</option>
          <option value="Scorpio">Scorpio</option>
          <option value="Sagittarius">Sagittarius</option>
          <option value="Capricornus">Capricornus</option>
          <option value="Aquarius">Aquarius</option>
          <option value="Pisces">Pisces</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="star">Star / Nakshatra</label>
        <select id="star" name="star" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="Ashwini">Ashwini</option>
          <option value="Bharani">Bharani</option>
          <option value="Krittika">Krittika</option>
          <option value="Rohini">Rohini</option>
          <option value="Mrigashira">Mrigashira</option>
          <option value="Ardra">Ardra</option>
          <option value="Punarvasu">Punarvasu</option>
          <option value="Pushya">Pushya</option>
          <option value="Ashlesha">Ashlesha</option>
          <option value="Magha">Magha</option>
          <option value="Purva Phalguni">Purva Phalguni</option>
          <option value="Uttara Phalguni">Uttara Phalguni</option>
          <option value="Hasta">Hasta</option>
          <option value="Chitra">Chitra</option>
          <option value="Swati">Swati</option>
          <option value="Vishaka">Vishaka</option>
          <option value="Anurada">Anurada</option>
          <option value="Jyeshta">Jyeshta</option>
          <option value="Mula">Mula</option>
          <option value="Purva Ashadha">Purva Ashadha</option>
          <option value="Uttara Ashadha">Uttara Ashadha</option>
          <option value="Shravana">Shravana</option>
          <option value="Dhanishta">Dhanishta</option>
          <option value="Shatabhishak">Shatabhishak</option>
          <option value="Purva Bhadrapada">Purva Bhadrapada</option>
          <option value="Uttara Bhadrapada">Uttara Bhadrapada</option>
          <option value="Revati">Revati</option>
        </select>
      </div>



      <!-- <div id="drop-down" name="drop-down" class="col-sm-6 form-group">
          <label for="travel">Is There Any Dosh In Your Kundli/ Horoscope? </label>
          <select name="travel" id="travel" onChange=showHide()>
            <option value="1">Yes</option>
            <option value="No" selected>No</option>
          </select>
      </div> -->

      <div>
          <label for="dosh">Select Dosh In Your Kundli/ Horoscope</label>
          <select name="dosh" id="dosh" >
            <option value="" hidden>Please Select</option>
            <option value="Mangal Dosha">Mangal Dosha</option>
            <option value="Kaal Sarp Dosha">Kaal Sarp Dosha</option>
            <option value="Nadi Dosha">Nadi Dosha</option>
            <option value="Pitra Dosha">Pitra Dosha</option>
            <option value="Angarak Dosha">Angarak Dosha</option>
            <option value="Guru Chandal Dosha">Guru Chandal Dosha</option>
            <option value="None">None</option>
          </select>
        </div>
    

        <h2 class="text-center">Education & Occupation</h2>


      <div class="col-sm-6 form-group">
        <label for="education">Your Education / NA</label>
        <select id="education" name="education" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="PHD">PHD</option>
          <option value="M.Phil">M.Phil</option>
          <option value="Post Graduate">Post Graduate</option>
          <option value="Under Graduate">Under Graduate</option>
          <option value="Diploma">Diploma</option>
          <option value="Highschool">Highschool</option>
          <option value="NA">NA</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="education_stream">Your Education Stream / NA</label>
        <input type="text"Class="form-control" name="education_stream" id="education_stream"  placeholder="Enter Your Stream"></input>
      </div>

      <div class="col-sm-6 form-group">
        <label for="employ">Employed In</label>
        <select id="employ" name="employ" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="Unemployed">Unemployed</option>
          <option value="Government Job">Government Job</option>
          <option value="Private Job">Private Job</option>
          <option value="Business Alone">Business Alone</option>
          <option value="Business in Patnership">Business in Patnership</option>
          <option value="Self Employed">Self Employed</option>
        </select>
      </div>

      <div class="col-sm-6 form-group">
        <label for="occupation">Occupation</label>
        <input type="text"Class="form-control" name="occupation" id="occupation"  placeholder="Enter Your Occupation"></input>
      </div>

      <div class="col-sm-6 form-group">
        <label for="income">Annual Income</label>
        <select id="income" name="income" class="form-control browser-default custom-select" >
          <option value="" hidden>Please Select</option>
          <option value="0-1 lakh">0-1 lakh</option>
          <option value="1-2 lakh">1-2 lakh</option>
          <option value="2-3 lakh">2-3 lakh</option>
          <option value="3-4 lakh">3-4 lakh</option>
          <option value="4-5 lakh">5-6 lakh</option>
          <option value="6-7 lakh">6-7 lakh</option>
          <option value="7-8 lakh">7-8 lakh</option>
          <option value="8-9 lakh">8-9 lakh</option>
          <option value="9-10 lakh">9-10 lakh</option>
          <option value="10 lakh above">10 lakh above</option>
        </select>
      </div>


      <h2 class="text-center">Upload a Image</h2>
      

      <div class="col-sm-6 form-group">
        <!-- <label for="image">Image</label> -->
        <input type="file" class="form-control" name="image_1" id="image" placeholder="dd"></input>
        <br>
        <input type="file" class="form-control" name="image_2" id="image"></input>
        <br>
        <input type="file" class="form-control" name="image_3" id="image"></input>
        <br>
      </div>

      <div class="col-sm-6 form-group">
        <!-- <label for="image">Image</label> -->
        <input type="file" class="form-control" name="image_4" id="image"></input>
        <br>
        <input type="file" class="form-control" name="image_5" id="image"></input>
        <br>
        <input type="file" class="form-control" name="image_6" id="image"></input>
        <br>
      </div>

      <div class="col-sm-12"> <br></br>
        <!-- {/* <input type="checkbox" class="form-check d-inline" id="chb" ></input> */} -->
        <input type="checkbox" class="d-inline" id="chb" ></input>
        <label for="chb" class="form-check-label">&nbsp; I accept all terms and conditions.
        </label>
      </div>

      <div class="col-sm-12 form-group mb-0">
      <!-- <br></br> -->
      <a href="Profile.php"><button class="btn btn-primary float-right" type="submit" name="register_details">Submit</button></a>
      
      </div>

    </div>
  </form>
</div>

<br>





<script>
  
//   function showHide() {
//     let travelhistory = document.getElementById('travel')
//     if (travelhistory.value == 1) {
//         document.getElementById('hidden-panel').style.display = 'block'
//     } else {
//         document.getElementById('hidden-panel').style.display = 'none'
//     }
// }

</script>

<?php 

}

else {
 
  echo  "<script>location.href='Homepage.php'</script>";
}





?>

    
</body>
</html>