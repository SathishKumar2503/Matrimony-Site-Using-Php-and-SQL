<?php
include('db_connect.php');
$data = '';
$status = $_POST['names'];

$sql = "SELECT * FROM `signup` WHERE `status` = '$status' ";
$result = mysqli_query($conn,$sql);
$id = 0;

while($row = mysqli_fetch_assoc($result))
{
    $id++;
    if($status == 'paid')
    {
        $span = "<span class='paid'>Paid</span>";  
    }
    else
    { 
        $span = "<span class='free'>Free</span>";
    } 

    //finding last seen day and time

    $last_login = $row['last_login'];

    $query1 = "SELECT CURDATE() AS 'current_date'";
    $result1 = mysqli_query($conn,$query1);
    $row1 = mysqli_fetch_assoc($result1);

    $end_date = $row1['current_date'];

    $query2 = "SELECT DATEDIFF('$end_date', '$last_login') AS date_differ FROM `signup`;";
    $result2 = mysqli_query($conn,$query2);
    $row2 = mysqli_fetch_assoc($result2);

    $date_differ = $row2['date_differ'];

    $profile_image = "data:image;base64,{$row['profile_image']}";
    $data .= "<tr>
    <td>".$id."</td>
    <td>
        <div class='client'>
        <div class='client-img bg-img' style='background-image: url(".$profile_image.")'></div>
            <div class='client-info'>
                <h4>".$row['username']."</h4>
                <small>".$row['email']."</small>
            </div>
        </div>
    </td>
    <td>".$row['sex']."</td>
    <td>".$row2['date_differ']." Days ago</td>
    <td>".$span."</td>
    <td>
        <div class='actions'>
        <a href='chatbox.php' style='color :#333;'><span class='lab la-telegram-plane'></span></a>
        <a href='chatbox.php' style='color :#333;'><span class='las la-eye'></span></a>
        <a href='Admin.php?username=".$row['username']."' style='color :black;'><span class='las la-trash'></span></a>
        </div>
    </td>
</tr>";
}
echo $data;
?>