<?php
session_start();
include("db_connect.php");
$se=$_SESSION["uid"];
$se1=$_SESSION["area"];


$sql = "SELECT * FROM order_data ";
if($result = $conn->query($sql)){

    ?>
<style>
    table, th, td {
  border: 1px solid rgb(5,44,56);
padding:20px;


}
table:hover:{
    background:#89A77A;
}
tr:hover {background-color: coral;}

</style>
<h1 style="font-weight: bold;  color: blue;
"> <center>Order Details</center></h1>
                        <table>
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th>Order id</th>
    <th>Customer id</th>
    <td>Shop id </td>
    <th>Pickup person id</th>
    <th> Dropup person id</th>
    <th>Area</th>
    <td>Location</td>
                <td>Phone</td>
    <th>Order progress</th>
    <th>Bill</th>
    <th>Delivery Type</th>
    <th>Product Type</th>
    <th>Order date</th>
    <th>Delivery date</th>


    <!-- <th style="padding-left: 100px"></th> -->

</tr>

                            </thead>
                            <?php
    while($row = $result->fetch_assoc()){

        if($row['s_id']==$se){
            if($row['area']==$se1){
        $id=$row['o_id'];

        ?>
          
        <tbody >
        <!-- <tr style="border:1px solid red"> -->
        

        <td><?php echo $row['o_id']?> </td>
        <td><?php echo $row['c_id']?> </td>
        <td><?php echo $row['s_id']?> </td>
        <td><?php echo $row['pickman_id']?> </td>
        <td><?php echo $row['dropup_id']?> </td>
        <td><?php echo $row['area']?> </td>
        <td><?php echo $row['d_location']?> </td>
         
        <td><?php echo $row['c_contact']?> </td>
        <td><?php echo $row['o_progress']?> </td>
        <td><?php echo $row['bill']?> </td>
        <td><?php echo $row['d_type']?> </td>
        <td><?php echo $row['p_type']?> </td>

        <td><?php echo $row['ord_date']?> </td>
        <td></td>
        <!-- <td><a href="order"></a></td> -->
        <!-- <td><input type="date" name="date"></td>
        <button>date</button> -->
        <?php

        // $_SESSION["area"] =date;
        
        
		echo "<td> <a href = 'deleteOrder.php?id=$id'> Delete </a> </td>";
        ?>
        
        
        
        
    </tr>
</tbody>

<?php
        }
    }
}
}
?>
<button style="margin-left: 50%;margin-bottom: 2px;"><a href="logout.php">Log Out</a></button>


