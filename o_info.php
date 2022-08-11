<?php
session_start();
include("db_connect.php");
$uid =  $_SESSION["uid"];

$sql = "SELECT * FROM order_data WHERE s_id = '$uid';";
if($result = $conn->query($sql)){
    ?>

<h1 style="color:black;padding-left: 650px;background-color:blue"></h1>
                        <table class="table" style="background-image: url(b.jpg);background-position: center;background-repeat: no-repeat;background-size: cover;display: flex;flex-direction: column;
  align-items: center;">
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th style="font-weight: bold; padding-left: 60px;color:rgb(168, 50, 143)">Order id</th>
    <th style="font-weight: bold; padding-left: 95px;color:rgb(168, 50, 143)">Customer id</th>
    <th style="font-weight: bold; padding-left: 105px;color:rgb(168, 50, 143)">Pickup person id</th>
    <th style="font-weight: bold; padding-left: 100px;color:rgb(168, 50, 143)">Dropup person id</th>
    <th style="padding-left: 100px"></th>
    <!-- <th style="padding-left: 100px"></th> -->

</tr>

                            </thead>
                            <?php
    while($row = $result->fetch_assoc()){
        $oid = $row['o_id'];
        $cid = $row['c_id'];
        $shopid = $row['s_id'];
        $pmid = $row['pickman_id'];
        $dropid = $row['dropup_id'];
        $area = $row['area'];
        $location = $row['d_location'];
        $contact = $row['c_contact'];
        $ordprogress= $row['o_progress'];
        $bill = $row['bill'];
        $del_type = $row['d_type'];
        ?>
        <tbody>
        <tr>
        <td><?php echo $oid ?></td>
        <td><?php echo $cid?></td>
        <td><?php echo $shopid ?></td>
        <td><?php echo $pmid?></td>
        <td><?php echo $dropid ?></td>
        <td><?php echo $area ?></td>
        <td><?php echo $location ?></td>
        <td><?php echo $contact ?></td>
        <td><?php echo $ordprogress ?></td>
        <td><?php echo $bill ?></td>
        <td><?php echo $del_type ?></td>
    
    </tr>
    </tbody>
    <?php
    }
}
    ?>
   





