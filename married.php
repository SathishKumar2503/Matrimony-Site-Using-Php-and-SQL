<?php 

include('db_connect.php');
session_start();
if(isset($_SESSION['adminname']))
{
    //query for total  users count
   $query = "SELECT COUNT(*) as count FROM `married`";
   $result = mysqli_query($conn,$query);
   $row = mysqli_fetch_array($result);
   $count = $row['count'];
   $indicator1 = $count."%";


    // //query for paid users
    // $query = "SELECT COUNT(*) as paidusers FROM `married` WHERE `status` = 'paid'";
    // $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_array($result);
    // $paidusers = $row['paidusers'];
    // $indicator2 = $paidusers."%";

    
    //query for male count
    $query = "SELECT COUNT(*) as male FROM `married` WHERE sex = 'male'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $male = $row['male'];
    $indicator3 = $male."%";

    //query for female count
    $query = "SELECT COUNT(*) as female FROM `married` WHERE sex = 'female'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $female = $row['female'];
    $indicator4 = $female."%";

    // //query for message count
    // $query = "SELECT COUNT(*) as msgcount FROM `message`";
    // $result = mysqli_query($conn,$query);
    // $row = mysqli_fetch_array($result);
    // $msgcount = $row['msgcount'];



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Admin | Dashboard</title>
    <link rel="stylesheet" href="Admin.css">
<!-- Ajax\jQuery CDN link -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
<!-- Icon Link -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
</head>
<body>
   <input type="checkbox" id="menu-toggle">
    <div class="sidebar">
        <div class="side-header">
            <h3>M<span>atrimony</span></h3>
        </div>
        
        <div class="side-content">
            <div class="profile">
                <div class="profile-img bg-img" style="background-image: url(jhon.jpg)"></div>
                <h4>My Admin</h4>
                <small>Manager</small>
            </div>

            <div class="side-menu">
                <ul>
                    <li>
                       <a href="Admin.php">
                            <span class="las la-home"></span>
                            <small>Dashboard</small>
                        </a>
                    </li>
                   
                    <li>
                       <a href="chatbox.php">
                            <span class="las la-envelope"></span>
                            <small>Mailbox</small>
                        </a>
                    </li>
                    <li>
                       <a href="" class="active">
                            <span class="las la-clipboard-list"></span>
                            <small>Married</small>
                        </a>
                    </li>
                    
                    <li>
                    <a href="logout.php">
                            <span class="las la-power-off"></span>
                            <small>Logout</small>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    
    <div class="main-content">
        
        <header>
            <div class="header-content">
                <label for="menu-toggle">
                    <span class="las la-bars"></span>
                </label>
                
                <div class="header-menu">
                    <label for="">
                        <!-- <span class="las la-search"></span> -->
                    </label>
                    
                    <div class="notify-icon">
                        <!-- <span class="las la-envelope" ></span> -->
                        <!-- <span class="notify">9</span> -->
                    </div>
                    
                    <div class="notify-icon">
                        <span class="las la-bell"></span>
                        <!-- <a href="chatbox.php" style="color :#333;"><span class="notify"><?php echo $msgcount; ?></span></a> -->
                    </div>
                    
                    <div class="user">
                        <div class="bg-img" style="background-image: url(img/1.jpeg)"></div>
                        
                        <span class="las la-power-off"></span>
                        <a href='logout.php' style='color :#333;'><span>Logout</span></a>
                    </div>
                </div>
            </div>
        </header>
        
        
        <main>
            
            <div class="page-header">
                <h1>Dashboard</h1>
                <small>Home / Dashboard</small>
            </div>
            
            <div class="page-content">
            
                <div class="analytics">

                    <div class="card">
                        <div class="card-head">
                            <h2><?php echo $count;  ?></h2>
                            <span class="las la-user"></span>
                        </div>
                        <div class="card-progress">
                            <small>Total Users</small>
                            <div class="card-indicator">
                                <div class="indicator one" style="width:  <?php echo $indicator1;  ?>"></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="card">
                        <div class="card-head">
                            <h2><?php echo $paidusers;  ?></h2>
                            <span class="las la-eye"></span>
                        </div>
                        <div class="card-progress">
                            <small>Paid Users</small>
                            <div class="card-indicator">
                                <div class="indicator two" style="width: <?php echo $indicator2;  ?>"></div>
                            </div>
                        </div>
                    </div> -->

                    <div class="card">
                        <div class="card-head">
                            <h2><?php echo $male;  ?></h2>
                            <span class="las la-mars"></span>
                        </div>
                        <div class="card-progress">
                            <small>Male</small>
                            <div class="card-indicator">
                                <div class="indicator three" style="width:  <?php echo $indicator3;  ?>"></div>
                            </div>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-head">
                            <h2><?php echo $female;  ?></h2>
                            <span class="las la-venus"></span>
                        </div>
                        <div class="card-progress">
                            <small>Female</small>
                            <div class="card-indicator">
                                <div class="indicator four" style="width:  <?php echo $indicator4;  ?>"></div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- <div class="records table-responsive">

                    <div class="record-header">
                        <div class="add">
                            <span>Order By</span>
                            <select name="fetchval" id="fetchval">
                                <option value="id" hidden>ID</option>
                                <option value="username">NAME</option>
                                <option value="last_login">DATE</option>
                            </select>
                            <button onclick="history.go(0)">Refresh</button>
                        </div>

                        <div class="browse">
                           <input type="search" placeholder="Search" class="record-search" id="getname">
                            <select name="fetchval2" id="fetchval2">
                                <option value="" disabled="" selected="">Status</option>
                                <option value="paid">PAID</option>
                                <option value="free">FREE</option>
                            </select>
                        </div>
                    </div> -->

                    <div>
                        <table width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th><span class="las la-user"></span> CLIENT</th>
                                    <th><span class="las la-sort"></span> GENDER</th>
                                    <th><span class="las la-calculator"></span> Mobile Number</th>
                                    <!-- <th><span class="las la-wallet"></span> ACCOUNT</th> -->
                                    <th><span class="las la-sort"></span> E-mail</th>
                                </tr>
                            </thead>
                            <!-- users details -->
                            <tbody id="showdata">
                                    <?php
                                                $id = 0;
                                                $query = "SELECT * FROM `married`";
                                                $result = mysqli_query($conn,$query);
                                                if(!$result)
                                                {
                                                    // die("query failed".mysqli_error());
                                                }
                                                else
                                                {
                                                    while($row = mysqli_fetch_assoc($result))
                                                    {
                                                        
                                                        $username = $row['username'];
                                                        $email = $row['email'];
                                                        $gender = $row['sex'];
                                                        $phone = $row['phone'];
                                                        // $last_login = $row['last_login'];
                                                        // $status = $row['status'];

                                                        //finding last seen day and time 

                                                        // $query1 = "SELECT CURDATE() AS 'current_date'";
                                                        // $result1 = mysqli_query($conn,$query1);
                                                        // $row1 = mysqli_fetch_assoc($result1);

                                                        // $end_date = $row1['current_date'];

                                                        // $query2 = "SELECT DATEDIFF('$end_date', '$last_login') AS date_differ FROM `signup`;";
                                                        // $result2 = mysqli_query($conn,$query2);
                                                        // $row2 = mysqli_fetch_assoc($result2);

                                                        // $date_differ = $row2['date_differ'];
                                                         $id++;                          

                                    ?>
                                <tr>
                                    <td><?php echo $id;   ?></td>
                                    <td>
                                        <div class="client">
                                           <!-- <div class="client-img bg-img" style="background-image: url(<?php echo "data:image;base64,{$row['profile_image']}"; ?>)"></div> -->
                                            <div class="client-info">
                                                <h4><?php echo $username; ?></h4>
                                               
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                    <h4><?php echo $gender; ?></h4>
                                    </td>
                                    <td>
                                    <!-- <?php echo $date_differ."  Days ago"; ?> -->
                                    <h4><?php echo $phone ;?></h4>
                                    </td>
                                    <!-- <td>
                                        <?php
                                            if($status == 'paid'){?>
                                    <span class="paid">Paid</span>  
                                    <?php }else{ ?> <span class="free">Free</span> <?php }?> 
                                    </td>                                -->
                                    <td>
                                        <!-- <div class="actions">
                                            <a href="Up_date.php?email=<?php echo $row['email'];?>" style="color :#333;"><span class="lab la-telegram-plane"></span></a>
                                            <a href="View_profile.php?email=<?php echo $row['email'];?>" style="color :#333;"><span class="las la-eye"></span></a>
                                            <a href="Admin.php?email=<?php echo $row['email'];?>" style="color :black;"><span class="las la-trash"></span></a>
                                        </div> -->
                                        <h4><?php echo $email; ?></h4>
                                    </td>
                                </tr>
                                <?php

                                    }}
                                                
                                ?>
                                
                            </tbody>
                        </table>
                    </div>

                </div>
            
            </div>
            
        </main>
        
    </div>

    <!-- for live search -->
<script>
    $(document).ready(function(){
        $('#getname').on("keyup", function(){
            var getname = $(this).val();
            $.ajax({
                method: 'POST',
                url:'searchajax.php',
                data:{name:getname},
                success:function(response)
                {
                    $("#showdata").html(response);
                }
            })
        })
    })
</script>
<script>
    $(document).ready(function(){
        $('#fetchval').on("change", function(){
            var value = $(this).val();
            $.ajax({
                method: 'POST',
                url:'filterajax.php',
                data:{namef:value},
                success:function(response)
                {
                    $("#showdata").html(response);
                }
            })
        })
    })
</script>
<script>
    $(document).ready(function(){
        $('#fetchval2').on("change", function(){
            var value2 = $(this).val();
            $.ajax({
                method: 'POST',
                url:'statusajax.php',
                data:{names:value2},
                success:function(response)
                {
                    $("#showdata").html(response);
                }
            })
        })
    })
</script>
<?php
if(isset($_GET['email']))
{
  $username = $_GET['email'];
  echo "<script>";
  echo "if (confirm('Are you sure you want to delete a account?') == true){ alert('Deleted');";
  echo "window.location.href='delete.php?email=".$email."'; }";
  echo "else{  alert('Canceled');";
  echo "window.location.href='Admin.php'; }";
  echo "</script>";
}
?>
</body>
</html>
<?php
}
else
{
    header("location:adminlogin.php");
}
?>
