<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
	.first{
		margin-left:80%;
	}
   </style>


</head>



<div class="first" >
    
    <form class="get" action="">
      <input type="text" placeholder="Search.." name="search">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
</div>




<?php
$search=$_GET['search'];
// $search = date('Y-m-d', strtotime($_GET["search"]));

// echo $search
?>
<!DOCTYPE html>
<html>
	
<head>
	
	<meta charset="utf-8">
	<title></title>
	<style>
table {

  width: 100%;
}

th,tr, td {
  text-align: left;
  padding: 8px;
}
/* 
tr:nth-child(even) {
  background-color: #D6EEEE;
} */
input:hover
{
    border: 2px solid red;
    background-color: blue;
	float: 2px;
	cursor:pointer;
    margin-top: 5px;
}
h1{
	padding-left: 45%;
	color:blue;
}
tr:hover {background-color: #D6EEEE;}
</style>
</head>
<tbody>
<h2 style="margin-left:20px;margin-buttom:20px;">Search <span class="badge bg-primary"><?php echo"Data"?></span></h2>
<!-- <p> Today's Date : <?php echo "$date"?> Time : <?php echo "$time"?></p> -->
<p id="content">please wait, loading data...</p>
<h2 id="f0"></h2>
<table id="f1" border="2px solid gray">

    </table>
<script>
// echo $search;

document.getElementById("f1").innerHTML = "";  
	// let n = prompt('please enter the id:');
	let n='<?php echo $search?>'
		fetch('http://localhost/Dhuyedaw/Dhuyedaw/Shopper/search2.php?search=' + n)
		.then(response => response.json())
		.then(myObj => {
			 //document.getElementById("content").innerHTML = JSON.stringify(myObj);
			document.getElementById("content").innerHTML = "";
			//document.getElementById("f0").innerHTML = myObj.status;
			// document.getElementById("f2").innerHTML = "";  
          
            var table = document.getElementById('f1');
            var trheader = document.createElement('tr');
            trheader.innerHTML = "<tr> <td> Order_data </td><td> Customer_name </td><td> Area </td><td>Contact</td><td>Pickman_id</td><td>Bill</td><td>Order_Date</td><td>Delivery_date</td><td>Progress</td></tr>";
            table.append(trheader);
          

       for (let i = 0; i < myObj["content"].length; i++) {
           console.log(i);
            var table = document.getElementById('f1');
           var tr = document.createElement('tr');  
           tr.innerHTML = "<tr> <td>" + myObj.content[i].o_id + "</td> <td>" +myObj.content[i].c_name + "</td> <td>" + myObj.content[i].area +"</td> <td>" + myObj.content[i].c_contact +"</td> <td>" + myObj.content[i].pickman_id + "</td> </tr>"+"</td> <td>" + myObj.content[i].bill + "</td> </tr>"+"</td> <td>" + myObj.content[i].Orderdate +"</td> <td>" +myObj.content[i].d_date +"</td> <td>" +myObj.content[i].o_progress + "</td></tr>";
           table.append(tr);
       }
           
       //document.getElementById("f1").innerHTML = myObj.content[1].name;
   }
       );


	// fetch('https://jsonplaceholder.typicode.com/todos/' + n)
	// 	.then(response => response.json())
	// 	.then(myObj => {
	// 		// document.getElementById("content").innerHTML = JSON.stringify(json);
	// 		document.getElementById("content").innerHTML = "";
	// 		document.getElementById("title").innerHTML = myObj.title;
	// 		document.getElementById("complete").innerHTML = myObj.completed;
	// 	})

	
//    var xmlhttp = new XMLHttpRequest();
//    document.getElementById("f1").innerHTML = "";
// 	 xmlhttp.onreadystatechange = function() {
// 	if (this.readyState == 4 && this.status == 200) {
// 	 		var myObj = JSON.parse(this.responseText);
// 	 		document.getElementById("content").innerHTML = this.responseText;
// 	 		document.getElementById("f0").innerHTML = myObj.content[0].name;
// 	 		document.getElementById("f1").innerHTML = "";
// 	 	}
// 	 };
// $search=$_GET['search'];
    xmlhttp.open("GET","http://localhost/serch/search2.php?id=" + $search, true);

	 xmlhttp.send();


	// let obj = {'name': 'Tom', 'age': 20};
	// let s = JSON.stringify(obj);
	// let obj2 = JSON.parse(s);
	// // console.log(obj2.name);

	// let list1 = [
	// 		{'name': 'Tom', 'age': 20}, 
	// 		{'name': 'peter', 'age': 35}
	// 		];
	// console.log(JSON.stringify(list1));

	
</script>
	</tbody>
	<section class="w3-container w3-center w3-content" style="max-width:600px">
    <h2 class="w3-wide">Dhuway Daw</h2>
    <p class="w3-opacity">Make Your LIfe easy</p>
  </section>
</html>