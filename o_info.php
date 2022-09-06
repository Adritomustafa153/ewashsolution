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
 th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
/* tr:nth-child(even) {
  background-color: #D6EEEE;
}
tr:hover {background-color: #D6EEEE;} */

table:hover:{
    background:#89A77A;
}
tr:nth-child(even){background-color: #f2f2f2;}

 tr:hover {background-color: #ddd;float: auto;}




/* tr:hover {background-color: coral;} */
.first{
    margin-left: 80%;
    color:black;
}

</style>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<h1 style="font-weight: bold;  color: blue;
"> <center>Order Details</center></h1>
<div class="first">
    
    <form class="get" action="search.php">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>
                        <table>
                            <thead class="thead-dark">
<tr style="font-weight: bold;">
    <th>Order id</th>
    <!-- <th>Customer id</th> -->
    <!-- <td>Shop id </td> -->
    <th>Pickup person id</th>
    <th> Dropup person id</th>
    <th>Area</th>
    <th>Location</th>
                <th>Phone</th>
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


        $progress=$row['o_progress'];
if(($row['area']==$se1)){
                if($progress="Done"){
        $id=$row['o_id'];
        ?>
          
        <tbody >
        <!-- <tr style="border:1px solid red"> -->
        

        <td><?php echo $row['o_id']?> </td>
       
        
        <td><?php echo $row['pickman_id']?> </td>
        <td><?php echo $row['dropup_id']?> </td>
        <td><?php echo $row['area']?> </td>
        <td><?php echo $row['d_location']?> </td>
         
        <td><?php echo $row['c_contact']?> </td>
        <td><?php echo $row['o_progress']?> </td>
        <td><?php echo $row['bill']?> </td>
        <td><?php echo $row['d_type']?> </td>
        <td><?php echo $row['p_type']?> </td>

        <td><?php echo $row['Orderdate']?> </td>
        <td><?php echo $row['d_date']?></td>
        <!-- <td><a href="order"></a></td> -->
        <!-- <td><input type="date" name="date"></td>
        <button>date</button> -->
        <?php
        $d_date=$row['d_date'];
        // $d_date = date('Y-m-d', strtotime($row["d_date"]));
        // $_SESSION["area"] =date;
        
		echo "<td> <a href = 'deleteOrder.php?id=$id&f0=$progress&d_date=$d_date'> Update </a> </td>";
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


