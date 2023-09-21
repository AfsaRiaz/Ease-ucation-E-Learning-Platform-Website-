<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EASE-ucation | All Tutor </title>

  <link rel="stylesheet" href="assets/bootstrap.min.css" >
  <script src="assets/jquery.js"></script>
  <script src="assets/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
   <style>
        
   body
	{
		background-image: url(../img/a.jpg);
		background-size: cover;
		background-attachment: fixed;
	} 
      .pad{
            margin-left : 150px;
            font-weight : bolder;
            padding-left : 30px;
            padding-right : 30px;
            padding-top : 10px;
            padding-bottom : 10px;
      }
      .mybutton{
          margin-left: 1150px;
          margin-top: 30px;
          padding-left:10px;
          padding-right:10px;
      }
      .mybutton a{
          font-weight:  
      }
   </style>

</head>
<body>
 
<div class="container-fluid  bgimg">

<div class="row y">
         <div class="col-12 ">
       <button class="btn btn-info text-white mybutton"> <a href="accountStudent.php" class="text-white"> Back </a></button>
 </div>
</div>

<div class = "container">
<div class = "col-lg-12">
<br>  <br>

<div class="row">
<div class="col-lg-4">
<h1 class = "text-center text-white"> All Tutors </h1>
<br>
</div>
<div class="col-lg-4">

</div>
<div class="col-lg-4">

</div>
</div>


<table class = "table table-stripped table-hover table-bordered bg-light" id = "myTable">
<tr class = "bg-dark text-white text-center">
      <th> Sno. </th>
      <th> Student Name </th>
      <th> Batch </th>
      <th> View </th>
      
      
</tr>

     
        <?php

        include 'conn.php';

     

       $q = "select * from tutor";

       $query = mysqli_query($con,$q);
       $x = 0;
       while($res = mysqli_fetch_array($query)){
       $x = $x + 1;
       ?>


<tr  class = "text-center">
      <td> <?php echo $x ?> </td>
      <td> <?php echo $res['name']." ".$res['cast']; ?> </td>
      <td> <?php echo $res['batch']; ?> </td>
      <td> <button class = "btn btn-success"> <a href="view.php?id=<?php echo $res['id']; ?> "class = "text-white"> View </a> </button> </td>
      
</tr>

       <?php
       }
       ?>
</table>
         
</div>
</div>
</div>
</body>
</html>

