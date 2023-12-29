<?php

include ('db_connect.php');
session_start();




if ($_SESSION['email']) {
 




if (isset($_GET['email'])) {


  $email = $_GET['email'];
  $query = "SELECT * FROM signup WHERE email = '$email'";
  $result = mysqli_query($conn,$query);

  if (!$result) {


    // die("query failed".mysqli_error());
    echo "Query error";



  }

  else {
    $row = mysqli_fetch_assoc($result);
  }

}

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    />


<!-- Bootstrap -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

 <!--  -->





    <!-- CSS -->
    <link rel="stylesheet" href="Viewprofile.css" />
  </head>
  <body>


  
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <!-- <img src="./images/pic1.jpg" alt="Anna Smith" /> -->
            <?php echo "<img src='data:image;base64,{$row['profile_image']}'alt='img' /img>"; ?>

            <span></span>
          </div>
          <h2><?php echo $row['name'] ?></h2>
          <p><?php echo $row['sub_caste'] ?></p>
          <p><?php echo $row['email'] ?></p>

          <!-- <ul class="about">
            <li><span>4,073</span>Followers</li>
            <li><span>322</span>Following</li>
            <li><span>200,543</span>Attraction</li>
          </ul> -->

          <div class="content">
            <!-- <p>
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam
              erat volutpat. Morbi imperdiet, mauris ac auctor dictum, nisl
              ligula egestas nulla.
            </p> -->
                  
                    <h2>Details</h2>
            <p>
            <ol class="list">
                <li><b>Age</b> : <?php echo $row['age'] ?></li>
                <li><b>D.O.B</b> : <?php echo $row['dob'] ?></li>
                <li><b>Gender</b> : <?php echo $row['sex'] ?></li>
                <li><b>Sub-Caste</b>: <?php echo $row['sub_caste'] ?></li>
                <li><b>Education</b> : <?php echo $row['education'] ?> - <?php echo $row['education_stream'] ?></li>
            </ol>
            </p>






            <ul>
              <li><i class="fab fa-twitter"></i></li>
              <i class="fab fa-pinterest"></i>
              <i class="fab fa-facebook"></i>
              <i class="fab fa-dribbble"></i>
            </ul>
          </div>
        </div>
        <div class="right__col">
          <nav>
            <ul>
              <li><a href="Viewprofile.php?email=<?php echo $row['email'] ?>" id="one">Photos</a></li>
              <!-- <li><a href="">galleries</a></li>
              <li><a href="">groups</a></li> -->
              <li><a href="" id="two"><b>Personel Details</b></a></li>
              <!-- <li><a href="" id="three">Horoscope</a></li> -->
            </ul>
            <!-- <button>Interested</button> -->
          </nav>

          <!-- <div class="photos tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <img src="./images/man.png" alt="Photo" />
            <img src="./images/pic1.jpg" alt="Photo" />
            <img src="./images/man.png" alt="Photo" />
            <img src="./images/pic1.jpg" alt="Photo" />
            <img src="./images/man.png" alt="Photo" />
            <img src="./images/pic1.jpg" alt="Photo" />
          </div> -->

    
    <div class="row list container">
                <li class="col-sm-6">✦ <b>Name</b> : <?php echo $row['name'] ?></li>
                <li class="col-sm-6">✦ <b>Age</b> : <?php echo $row['age'] ?></li>
                <li class="col-sm-6">✦ <b>D.O.B</b> : <?php echo $row['dob'] ?></li>
                <li class="col-sm-6">✦ <b>Gender</b> : <?php echo $row['sex'] ?></li>
                <li class="col-sm-6">✦ <b>Sub-Caste</b>: <?php echo $row['sub_caste'] ?></li>
                <li class="col-sm-6">✦ <b>Education</b> : <?php echo $row['education'] ?> - <?php echo $row['education_stream'] ?></li>
                <li class="col-sm-6">✦ <b>Occupation</b> : <?php echo $row['occupation'] ?></li>
                <li class="col-sm-6">✦ <b>Annual Income</b> : <?php echo $row['income'] ?></li>
                <!-- <li class="col-sm-6">✦ <b>Phone Number</b> : 12345678</li> -->
                <li class="col-sm-6">✦ <b>Father Name</b> : <?php echo $row['father_name'] ?></li>
                <li class="col-sm-6">✦ <b>Mother Name</b> : <?php echo $row['mother_name'] ?></li>
                <li class="col-sm-6">✦ <b>Family Value</b> : <?php echo $row['familyvalues'] ?></li>
                <li class="col-sm-6">✦ <b>Family Type</b> : <?php echo $row['familytype'] ?></li>
                <li class="col-sm-6">✦ <b>Family Status</b> : <?php echo $row['familystatus'] ?></li>
                <li class="col-sm-6">✦ <b>No.of Brothers</b> : <?php echo $row['brothers'] ?></li>
                <li class="col-sm-6">✦ <b>No.of Sister</b> : <?php echo $row['sisters'] ?></li>
                <li class="col-sm-6">✦ <b>Sun Sign</b> : <?php echo $row['sunsign'] ?></li>
                <li class="col-sm-6">✦ <b>Star / Nakshatra</b> : <?php echo $row['star'] ?></li>
                <li class="col-sm-6">✦ <b>Dosh</b> : <?php echo $row['dosh'] ?></li>
      </div>
       

        

        </div>
      </div>


      


    </div>



  <?php
  
  
  
}

else {
 
  echo  "<script>location.href='Homepage.php'</script>";

  
}
  
  
  
  
  ?>






  </body>
</html>