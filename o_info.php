<?php
session_start();
include("db_connect.php");
$se=$_SESSION["uid"];

$sql = "SELECT * FROM order_data ";
if($result = $conn->query($sql)){

    ?>
<style>
    table, th, td {
  border: 1px solid rgb(5,44,56);
}
</style>

                        <table>
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th>Order id</th>
    <th>Customer id</th>
    <td>Shop id </td>
    <th>Pickup person id</th>
    <th> Dropup person id</th>
    <th>Area</th>
    <td>Loaction</td>
                <td>Phone</td>
    <th>Order progress</th>
    <th>Bill</th>
    <th>Delivery Type</th>
    <th>Order date</th>
    <th>Delivery date</th>
<th>Shopper Name</th>

    <th style="padding-left: 100px"></th>
    <!-- <th style="padding-left: 100px"></th> -->

</tr>

                            </thead>
                            <?php
    while($row = $result->fetch_assoc()){

        if($row['s_id']==$se){


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
        <td><?php echo $row['del_date']?> </td>
       
        <td><?php echo $row['s_name']?> </td>

       

        </tr>
    </tbody>

<?php
        }
    }
}
?>



