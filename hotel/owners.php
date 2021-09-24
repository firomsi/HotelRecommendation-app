<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title> Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 
  <link href="https://fonts.googleapis.com/css?family=Roboto:300" rel="stylesheet"> 

  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="//jqueryui.com/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script>
  
  $( function() {
    $( ".datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  } );
  </script>








</head>
<body>

<header>
  <div id="website-title">
     Hotel Recommendation System  
  </div>


  

   

    

  <?php if(!isset($_SESSION['is_logged_in'])) 
    { 
      $_SESSION['is_logged_in']="0";
    } 
  ?>


  <!-- Checking if user is logged in -->
  
  <?php if($_SESSION['is_logged_in']=="true"){ ?>
  
  <!-- Checking if user is admin -->
  <?php
  if($_SESSION['role']=='admin'){?>
    <div id="adminpanel">
     <a href="all-hotel.php">
     Admin Page
     </a>
     </div>
    
    
  <?php }else{
  
  ?>
    <div id="adminpanel">
     <a href="all-hotel.php">
     Owner Page
     </a>
     </div>  
   
  <?php }
  ?>
  <div id="login">
    <a href="login.php?logout=true">
     Logout  
     </a>
  </div>

  <?php } else{ ?>
    <div id="register">
     <a href="register.php">
     Register
     </a>
    </div>
    <div id="login">
      <a href="login.php">
       Login  
       </a>
    </div>

  <?php } ?>

  <div id="login" style="float:right;">
    <a href="index.php">
     Home  
     </a>
  </div>



  





</header>





<?php require 'mysql_connect.php'; ?>



<!-- Updating hotel information -->






<br>
<br><br><br>
<div style="text-align: center; align-self:center ">
<h2>List of Owners</h2><?php

$query = "SELECT * FROM users";


echo '<table border="0" class="table" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">ID&nbsp&nbsp&nbsp&nbsp</font> </td> 
          <td> <font face="Arial">Name&nbsp&nbsp&nbsp&nbsp</font> </td> 
          
      </tr>';

if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["id"];
        $field2name = $row["name"];
       

        echo '<tr> 
                  <td>'.$field1name.'&nbsp&nbsp&nbsp&nbsp</td> 
                  <td>'.$field2name.'&nbsp&nbsp&nbsp&nbsp</td> 
                  
              </tr>';
    }
    $result->free();
}

?>
</div><?php include 'footer.php' ?>