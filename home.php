<?php
date_default_timezone_set('Asia/dhaka');
$date = date('d-m-y');
$time = date(' h:i:s');

?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Admin | Home</title>
     <style>
         h3{
        color : white;
        font: 1em sans-serif,Arial;
        margin-right: 30px ;
    }
    .weladm{
      margin-top:10px;
      margin-left: 220px;
      
    }
  
    
    </style>
    <link rel="stylesheet" href="sidenav.css">
 </head>
 <body>
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.4.0/mdb.min.js"
></script>
    

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>
<script src="https://use.fontawesome.com/ba28bf3eae.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</nav>
<!-- Side navigation -->
<div class="sidenav">
  <h1>Admin</h1>
  <a href="home.php">Home</a>
  <a href="shoppers.php">Shoppers</a>
  <a href="#">Delivery</a>
  <a href="customers.php">Customer</a>
  <a href="#">Todays Delivery</a>
  <a href="#">History</a>
</div>

<!-- Page content -->
<div class="main">
  
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-1" href="home.php">
        <img
          src="logo.jpg"
          height="15"
          alt="Ewash Solution"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="addshopper.php">Add Shopper</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Add Product</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tracking</a>
        </li>
      </ul>

      <!-- Left links
    </div>
  

   
    <div class="d-flex align-items-center">
    
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a> 

       Notifications -->
      <!-- <div class="dropdown">
        <a
          class="text-reset me-3 dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">1</span>
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuLink"
        >
          <li>
            <a class="dropdown-item" href="#">Some news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Another news</a>
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
      </div> -->
      <!-- Avatar -->
      <div class="dropdown">
        <a
          class="dropdown-toggle d-flex align-items-center hidden-arrow"
          href="#"
          id="navbarDropdownMenuAvatar"
          role="button"
          data-mdb-toggle="dropdown"
          aria-expanded="false"
        >
          <img
            src="admpro.jpg"
            class="rounded-circle"
            height="25"
            alt="hello"
            loading="lazy"
          />
        </a>
        <ul
          class="dropdown-menu dropdown-menu-end"
          aria-labelledby="navbarDropdownMenuAvatar"
        >
          <li>
            <a class="dropdown-item" href="#">My profile</a>
          </li>
          
          <li>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
  
</div>
<div class="weladm">
<h2>Welcome <span class="badge bg-primary"><?php echo"Admin"?></span></h2>
<p> Today's Date : <?php echo "$date"?> Time : <?php echo "$time"?></p>


</div>


 </body>
 <script src="sidenav.js"></script>
 </html>