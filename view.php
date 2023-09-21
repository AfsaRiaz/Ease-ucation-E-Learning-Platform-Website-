<?php

include 'conn.php';

$id = $_GET['id'];

$q = " select * from tutor WHERE id = $id ";

 $resSet = mysqli_query($con, $q);
 if($res = mysqli_fetch_array($resSet)){
    $name = $res['name'];
    $fname = $res['fname'];
    $cast = $res['cast'];
    $phone = $res['phone'];
    $image = $res['image'];
    $batch = $res['batch'];
    $dept = $res['dept'];
    $email = $res['email'];
    $dor = $res['dor'];
    $subjects = $res['subjects'];
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutor Profile</title>

    <link rel="stylesheet" href="assets/bootstrap.min.css" >
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
     <style>
           body
	{
		background-image: url(../img/i.jpg);
		background-size: cover;
		background-attachment: fixed;
	}
     </style>
</head>
<body>
         
         <div class="row">
         <div class="col-12">
 <nav>
         EASE-ucation
         <span class="out"><a href="accountStudent.php">Back</a></span>
 </nav>
 </div>
</div>

<div class="row bgimg ">
    <div class="col-1"></div>
    <div class="col-10">
    <div class="card-header bg-dark abc">
                     <h1 class = "text-white text-center"> Tutor Profile </h1>
                     </div>

                     <table class=" table table-stripped table-hover table-bordered abc bg-light">
                         
                     <tr>
                         <th>Name</th>
                         <td> <?php echo $name; ?> </td>
                     </tr>

                     <tr>
                         <th>Father Name</th>
                         <td> <?php echo $fname; ?> </td>
                     </tr>

                     <tr>
                         <th>Surname</th>
                         <td> <?php echo $cast; ?> </td>
                     </tr>

                     <tr>
                         <th>Gender</th>
                         <td> <?php echo $image; ?> </td>
                     </tr>

                     <tr>
                         <th>Department</th>
                         <td> <?php echo $dept; ?> </td>
                     </tr>

                     <tr>
                         <th>Batch</th>
                         <td> <?php echo $batch; ?> </td>
                     </tr>

                     <tr>
                         <th>Subjects</th>
                         <td> <?php echo $subjects; ?> </td>
                     </tr>

                     <tr>
                         <th>Phone Number</th>
                         <td> <?php echo "0".$phone; ?> </td>
                     </tr>

                     <tr>
                         <th>Email</th>
                         <td> <?php echo $email; ?> </td>
                     </tr>

                     </table>
    </div>
    <div class="col-1"></div>
</div>
             
</body>
</html>