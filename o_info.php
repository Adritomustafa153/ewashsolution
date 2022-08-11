<?php
session_start();
include("db_connect.php");
$uid =  $_SESSION["uid"];

$sql = "SELECT * FROM order_data ";
if($result = $conn->query($sql)){

    ?>


                        <table class="table" style="background-image: url(b.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;display: flex;flex-direction: column;
  align-items: center;">
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th>Order id</th>
    <th>Customer id</th>
    <th>Pickup person id</th>
    <th> Dropup person id</th>
    <th>Area</th>
    <th>Location</th>
    <th>Order progress</th>
    <th>Bill</th>
    <th>Delivery Type</th>


    <th style="padding-left: 100px"></th>
    <!-- <th style="padding-left: 100px"></th> -->

</tr>

                            </thead>
                            <?php
    while($row = $result->fetch_assoc()){
        ?>
          
        <tbody style="border:2px solid coral;">
        <!-- <tr style="border:1px solid red"> -->
        

        <td style=" padding-left: 100px; font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['o_id']?> </td>
        <td style=" padding-left: 120px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['c_id']?> </td>
        <td style=" padding-left: 95px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['s_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>
        <td style=" padding-left: 100px;font-weight: bold;color:rgb(50, 168, 149)"><?php echo $row['pickman_id']?> </td>

       

        </tr>
    </tbody>

<?php
    }
}
?>



