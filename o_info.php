<?php
session_start();
include("db_connect.php");
$se=$_SESSION["uid"];
$se1=$_SESSION["area"];


$sql = "SELECT * FROM order_data ";
if($result = $conn->query($sql)){

    ?>
<style>
    .second{
        padding:10px;
    }
    
    /* table, th, td {
  border: 1px solid rgb(5,44,56);
padding:20px;


} */
 /* th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
} */
/* tr:nth-child(even) {
  background-color: #D6EEEE;
}
tr:hover {background-color: #D6EEEE;} */

table:hover:{
    background:#89A77A;
}
/* tr:nth-child(even){background-color: #f2f2f2;} */

 tr:hover {background-color: #ddd;float: auto;}




/* tr:hover {background-color: coral;} */
.first{
    margin-left: 80%;
    color:black;
}
.third{
    margin-left:43%;
    background-color: gray;
    margin-right:40%;
    padding:20px;
}

</style>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<!-- <h1 style="font-weight: bold;  color: blue;
"> <center>Order Details</center></h1> -->
<h2>Welcome <span class="badge bg-primary"><?php echo"Shoppper"?></span></h2>
<!-- <p> Today's Date : <?php echo "$date"?> Time : <?php echo "$time"?></p> -->


<button style="font-weight: bolder;margin-left:85%;" ><a  href='search.php?search=" "'>Search</a></button>



                        <table style="margin-top:10px;" class="table border">
                            <thead class="table-dark">
<tr style="padding:10px;">
    <th style="padding:1%">Order id</th>
    <!-- <th>Customer id</th> -->
    <!-- <td>Shop id </td> -->
    <th style="padding:1%">Pickup person id</th>
    <th style="padding:1%"> Dropup person id</th>
    <th style="padding:1%">Area</th>
    <th style="padding:1%">Location</th>
                <th style="padding:1%">Phone</th>
    <th style="padding:1%">Order progress</th>
    <th style="padding:1%">Bill</th>
    <th style="padding:1%">Delivery Type</th>
    <th style="padding:1%">Product Type</th>
    <th style="padding:1%">Order date</th>
    <th style="padding:1%">Delivery date</th>


    <!-- <th style="padding-left: 100px"></th> -->

</tr>

                            </thead>
                            <tbody style="padding-top:5px;">
                            <?php
    while($row = $result->fetch_assoc()){


        $progress=$row['o_progress'];
if(($row['area']==$se1)){
                if($progress="Done"){
        $id=$row['o_id'];
        ?>
          
        
        <!-- <tr style="border:1px solid red"> -->
        <tr  class="second" >

        <td style="padding:1%"><?php echo $row['o_id']?> </td>
       
      
       <td style="padding:1%" ><?php echo $row['pickman_id']?> </td>
     
        <td style="padding:1%"><?php echo $row['dropup_id']?> </td>
        <td style="padding:1%"><?php echo $row['area']?> </td>
        <td style="padding:1%"><?php echo $row['d_location']?> </td>
         
        <td style="padding:1%"><?php echo $row['c_contact']?> </td>
        <td style="padding:1%"><?php echo $row['o_progress']?> </td>
        <td><?php echo $row['bill']?> </td>
        <td style="padding:1%"><?php echo $row['d_type']?> </td>
        <td style="padding:1%"><?php echo $row['p_type']?> </td>

        <td style="padding:1%"><?php echo $row['Orderdate']?> </td>
        <td style="padding:1%"><?php echo $row['d_date']?></td>
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

   
        
        
        
    
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <?php


}

}
}
} 

?>
</tbody>
</table>
<div class="third">


    <h3 style="padding:1%;font-weight: bolder;">Delivery Man Details</h3>
    <button style="margin-left:55px;font-weight: bolder;"><a  href='datasearch.php?search=" "'>Search</a></button>

</div>
<section style="padding-top:5%;"  class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">Dhuway Daw</h2>
    <p class="w3-opacity">Make Your LIfe easy</p>
  </section>
<button style="margin-left: 48%;margin-top: 20px;font-weight: bolder;"><a href="logout.php?logout='logout'">Log Out</a></button>


