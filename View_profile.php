
<?php

include ('db_connect.php');
session_start();


if(isset($_SESSION['adminname'])) {
 


  
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


// $email = $_SESSION['email'];

// $query = "SELECT * FROM signup WHERE email = '$email'";
// $result = mysqli_query($conn,$query);



// $row =mysqli_fetch_assoc($result);


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
    <!-- CSS -->
    <link rel="stylesheet" href="Viewprofile.css" />
  </head>
  <body>
    <div class="header__wrapper">
      <header></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <?php echo "<img src='data:image;base64,{$row['profile_image']}'alt='img' /img>"; ?>
            <span></span>
          </div>
          <h2><?php echo $row['name'] ?></h2>
          <p><?php echo $row['sub_caste'] ?></p>
          <p><?php echo $row['email'] ?></p>
          
          <!-- <ul class="about">
            <li><span>4,073</span>Followers</li>
            <li><span>322</span>Following</li>
            <li><span>200,543</span>Attraction</li>e
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
              <li><a href="">Photos</a></li>
              <!-- <li><a href="">galleries</a></li>
              <li><a href="">groups</a></li> -->
              <li><a href="Detail.php?email=<?php echo $row['email'] ?>">Personel Details</a></li>
              <!-- <li><a href="">Horoscope</a></li> -->
            </ul>
            <!-- <button>Interested</button> -->
          </nav>

          <div class="photos tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">

            <!-- <img src="./images/dhanush.jpg" alt="Photo" />
            <img src="./images/man.png" alt="Photo" />
            <img src="./images/vijay.jpg" alt="Photo" />
            <img src="./images/vijay.jpg" alt="Photo" />
            <img src="./images/pic1.jpg" alt="Photo" />
            <img src="./images/dhanush.jpg" alt="Photo" /> -->

            <?php echo "<img src='data:image;base64,{$row['image_1']}'alt='sri' /img>"; ?>
            <?php echo "<img src='data:image;base64,{$row['image_2']}'alt='sri' /img>"; ?>
            <?php echo "<img src='data:image;base64,{$row['image_3']}'alt='sri' /img>"; ?>
            <?php echo "<img src='data:image;base64,{$row['image_4']}'alt='sri' /img>"; ?>
            <?php echo "<img src='data:image;base64,{$row['image_5']}'alt='sri' /img>"; ?>
            <?php echo "<img src='data:image;base64,{$row['image_6']}'alt='sri' /img>"; ?>


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